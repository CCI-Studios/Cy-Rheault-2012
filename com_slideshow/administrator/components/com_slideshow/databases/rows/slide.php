<?php

class ComSlideshowDatabaseRowSlide extends KDatabaseRowDefault
{

	public function imagePath()
	{
		return "/media/com_slideshow/uploads/slides/{$this->image}";
	}

	public function image()
	{
		return "<img src=\"{$this->imagePath()}\" alt=\"{$this->title}\" style=\"max-width: 100%\" />";
	}

}