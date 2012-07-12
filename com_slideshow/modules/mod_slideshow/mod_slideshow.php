<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/slideshow.aliases');
echo KService::get('mod://site/slideshow.html')
	->module($module)
	->display();