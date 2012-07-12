CREATE TABLE IF NOT EXISTS `#__slideshow_slides` (
	`slideshow_slide_id` SERIAL,

	`title` VARCHAR(250) NOT NULL,
	`link` VARCHAR(250) NOT NULL,
	`image` VARCHAR( 250 ) NOT NULL,

	`ordering` INT( 11 ) UNSIGNED NOT NULL
) ENGINE = INNODB;