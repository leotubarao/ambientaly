$('.ltco_filter').on('submit', function(e) {
	e.preventDefault();

	const serialized = $(this).serializeArray();

	const obj = serialized.reduce((obj, entry) => {
		if (!obj[entry.name]) obj[entry.name] = [];

		obj[entry.name].push(entry.value);

		return obj;
	}, {});

	const args = Object.keys(obj).map(name => {
		return {
			name: name,
			value: obj[name].join(',')
		}
  });

  let url = options.page_redirect;

	url += '?';

	$.each(args, function( _i, el ) {
		if (el.value === 'all' || el.name === 'page') return;

		url += el.name + '=' + el.value + '&';
	});

  url = url.slice(0, -1);

	window.location.replace( url );
});
