window.addEvent('domready', function() {
	// image roll overs
	new CCI.Rollover('img.rollover');
	// new CCI.Rollover('li.item-122 img, li.item-105 img', { normal_text: '.', over_text: '_rollover.'});

	// image lettering
	$$('h1').lettering('words');
});

window.addEvent('load', function () {
	// columns
	// new CCI.Columns($('bottom'), '.module > div > div');
});