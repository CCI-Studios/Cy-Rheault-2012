<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KService::setAlias(
	'com://site/slideshow.model.slides',
	'com://admin/slideshow.model.slides');
KService::setAlias(
	'com://site/slideshow.database.row.slide',
	'com://admin/slideshow.database.row.slide');
