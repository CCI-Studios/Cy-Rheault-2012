<?php

class ComSlideshowDatabaseRowSlide extends KDatabaseRowDefault
{

	public function imagePath()
	{
		return "/media/com_slideshow/uploads/slides/{$this->image}";
	}

	public function image()
	{
		return "<img src=\"adsf\" alt=\"{$this->title}\" />";
	}

}