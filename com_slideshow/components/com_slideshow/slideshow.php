<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/slideshow.aliases');
echo KService::get('com://site/slideshow.dispatcher')->dispatch();