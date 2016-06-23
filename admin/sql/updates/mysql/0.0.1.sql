DROP TABLE IF EXISTS `#__items`;

CREATE TABLE `#__items` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
		`name` VARCHAR(25) NOT NULL,
	`status` tinyint(4) NOT NULL,
	`catid` VARCHAR(25) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

	DROP TABLE IF EXISTS `#__properties`;

CREATE TABLE `#__properties` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
		`prop_name` VARCHAR(25) NOT NULL,
		`description` VARCHAR(25) NOT NULL,
		`value` VARCHAR(25) NOT NULL,
			`published` tinyint(4) NOT NULL,
	`catid` VARCHAR(25) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

DROP TABLE IF EXISTS `#__manager`;

CREATE TABLE `#__manager` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
		`id_items` VARCHAR(25) NOT NULL,
		`id_properties` VARCHAR(25) NOT NULL,
		`value` VARCHAR(25) NOT NULL,
				PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;





