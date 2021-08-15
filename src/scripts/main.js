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
