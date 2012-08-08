window.addEvent('domready', function() {
	$$('.mod_slideshow').each(function (slideshow) {
		var slides = slideshow.getElements('.panel > div > div'),
			current = 0,
			delay = 3000,
			duration = 1000,
			buffer = 200,
			slideCount = slides[0].getElements('>div').length,
			thumb = slideshow.getElement('.thumb'),
			transition = function() {
				current += 100;
				if (current / 100 >= slideCount) {
					current = 0;
				}

				slides.tween('left', '-'+current);
				thumb.tween('left', current/slideCount);
				transition.delay(delay);
			};

		slides.each(function(slide, index) {
			slide.get('tween').options.unit = '%';
			slide.get('tween').options.duration = duration + (index)*buffer;
		});

		thumb.setStyle('width', (100/slideCount)+'%');
		thumb.get('tween').options.unit = '%';
		thumb.get('tween').options.duration = duration + buffer*(slideCount-1);

		transition.delay(delay);
	});
});