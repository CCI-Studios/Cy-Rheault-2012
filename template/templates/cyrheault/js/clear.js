window.addEvent('domready', function(){
	var elements = $$('.ie7 .gallery-block:nth-child(3n+1), .ie8 .gallery-block:nth-child(3n+1)');
	elements.addClass('clearfix');	
});