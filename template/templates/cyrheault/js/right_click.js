// i know, i know...
window.addEvent('domready', function() {
	$$('body').addEvent('contextmenu',function(e) {
		e.stop();
	});
});