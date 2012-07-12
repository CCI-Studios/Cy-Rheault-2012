<?php

class ModSlideshowHtml extends ModDefaultHtml
{
	
	public function display()
	{	
		return $this->getService('com://site/slideshow.controller.slide')
				->view('slides')
				->layout('panels')
				->display();
	}
}