<?php

class ComSlideshowDatabaseTableSlides extends KDatabaseTableDefault
{
	protected function _initialize(KConfig $config)
	{
		$uploadable = $this->getService('com://admin/cci.database.behavior.uploadable', array(
			'location'	=> 'media/com_slideshow/uploads/slides/',
			'fieldname'	=> 'image'
		));
		$config->behaviors = array($uploadable, 'orderable');
		parent::_initialize($config);
	}
}