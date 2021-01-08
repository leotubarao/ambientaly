const isValid = input => {
  if (input.checkValidity) return input.checkValidity();

  let isValid = true;
  const value = $(input).val();
  const type = $(input).attr('type');
  const isRequired = input.attr('required');

  if (value) isValid = !('email' === type && !/^([^@]+?)@(([a-z0-9]-*)*[a-z0-9]+\.)+([a-z0-9]+)$/i.test(value));

  else if (isRequired) isValid = false;

  $(input)[(isValid ? 'remove' : 'add') + 'Class']('is-invalid');

  return isValid;
};

const getInputValues = form => {
  let data = [];
  let isValidForm = true;

  form.find('[data-form-field]').each(function() {
    if (!isValid(this)) isValidForm = false;

    data.push([
      $(this).attr('data-form-field') || $(this).attr('name'),
      $(this).val()
    ]);
  });

  data = JSON.stringify(data);

  return {
    isValidForm,
    data,
  };
}

$(document).ready(() => {
  $('[data-form-type="ltco_form"]').each(function () {

    const form = $(this);
    const fields = form.find('[data-form-field]:not([type="hidden"])');
    const alert = form.find('[data-form-alert]');
    const submit = form.find('[type="submit"]');
    const submitText = submit.text();

    form.submit(function (e) {
      e.preventDefault();

      form.addClass('was-validated');

      let { isValidForm, data } = getInputValues(form);

      if (!isValidForm) return;

      $.ajax({
        url: './includes/send.php',
        data: data,
        type: 'POST',
        beforeSend: (_xhr) => {
          submit.text('ENVIANDO...').prop('disabled', true);
          fields.removeClass('is-invalid');
          alert.prop('hidden', true);
          alert.removeClass('alert-success alert-danger');
        },
        success: (r) => {
          const res = JSON.parse(r);

          alert.text(res.message || 'Mensagem enviada com sucesso!');

          alert.addClass(`alert-${res.class || 'success'}`);
          alert.prop('hidden', false);
          fields.val('');
        }
      })
      .done(function () {
        form.removeClass('was-validated');
        submit.text(submitText).prop('disabled', false);
      });
    });
  });
});

$(document).on({
  click: function (e) {
    if ($(e.target).hasClass('show')) {

      $('.navbar-collapse.show').collapse('hide');

      $('body').removeAttr('style');
    }
    e.stopPropagation();
  },

  keyup: function (e) {
    if (e.keyCode == 27 && $('.navbar-collapse').hasClass('show')) {

      $('.navbar-collapse.show').collapse('hide');

      $('body').removeAttr('style');
    }
    e.stopPropagation();
  }
});

$('.navbar .navbar-toggler').click(function () {

  $('body').removeAttr('style');

  if (!$(this).hasClass('inside'))
    $('body').css({
      overflow: 'hidden',
      paddingRight: $(window).outerWidth() - $(window).width()+'px'
    });
});

jQuery(function($){

  const SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  };

  const spOptions = {
    onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
  };

  $('input[name="telefone"], input[name="celular"], input[type="tel"]').mask(SPMaskBehavior, spOptions);
});
