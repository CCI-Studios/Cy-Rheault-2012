<?php
defined('KOOWA') or die;

class ComSlideshowDispatcher extends ComDefaultDispatcher
{

	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller' => 'slide'
		));

		parent::_initialize($config);
	}

}