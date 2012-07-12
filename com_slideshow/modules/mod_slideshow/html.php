<?php

class ModSlideshowHtml extends ModDefaultHtml
{
	
	public function display()
	{
		$model = $this->getService('com://site/slideshow.model.slides');
		$slides = $model->getList();

		$this->assign('slides', $slides);

		return parent::display();
	}
}