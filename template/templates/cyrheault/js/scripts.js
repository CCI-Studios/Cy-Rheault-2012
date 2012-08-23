/**
 * @codekit-prepend "columns.js"
 * @codekit-prepend "dropmenu.js"
 * @codekit-prepend "html5.js"
 * @codekit-prepend "lettering.js"
 * @codekit-prepend "menu.js"
 * @codekit-prepend "clear.js"
 * @codekit-prepend "detectmobilebrowser.js"
 * @codekit-prepend "rollover.js"
 * @codekit-prepend "right_click.js"
 */

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