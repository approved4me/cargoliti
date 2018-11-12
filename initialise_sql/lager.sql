DROP DATABASE IF EXISTS cargoliti;
CREATE DATABASE IF NOT EXISTS cargoliti;
USE cargoliti;

CREATE TABLE IF NOT EXISTS `user` (
	`id` int(5) unsigned NOT NULL AUTO_INCREMENT,
	`firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` timestamp NULL DEFAULT NULL,
	`passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`passwortcode_time` timestamp NULL DEFAULT NULL,
	PRIMARY KEY (`id`), UNIQUE (`email`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `package` (
	`id` int(5) unsigned NOT NULL AUTO_INCREMENT,
	`package_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
	)
	ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `lager` (
	`id` int(6) unsigned ZEROFILL AUTO_INCREMENT  NOT NULL,
	`user_id` int(5) unsigned NOT NULL,
	`lcl_reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
	`ref_shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
	`email_shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
	`ref_agent` varchar(50) COLLATE utf8_unicode_ci NULL,
	`email_agent` varchar(50) COLLATE utf8_unicode_ci NULL,
	`consignee` varchar(50) COLLATE utf8_unicode_ci NULL,
	`vessel` varchar(50) COLLATE utf8_unicode_ci NULL,
	`pod` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`amount` int(5) NOT NULL,
	`package_id` int(5) unsigned NOT NULL,
	`description` text(1000) COLLATE utf8_unicode_ci NULL,
	`kgs` decimal(9,3) NOT NULL,
	`cbm` decimal(9,3) NOT NULL,
	`cbm_final` decimal(9,3) NULL,
	`marks` text(1000) COLLATE utf8_unicode_ci NULL,
	`t1` BOOLEAN NOT NULL,
	`imo` BOOLEAN NOT NULL,
	`remarks` varchar(50) COLLATE utf8_unicode_ci NULL,
	`created_am` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` timestamp NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES  user(id),
	FOREIGN KEY (`package_id`) REFERENCES  package(id)
	)
	ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user`(
	`firstname`,
	`surname`,
	`email`,
	`password`,
	`created_at`
	)

VALUES(
   'Vorname',
   'Nachname',
   'Email@Mail.com',
   'Passwort',
   CURRENT_TIMESTAMP
);


INSERT INTO `package`(
	`package_type`
)

VALUES
	('Holzpalette'),
	('Holzkiste'),
	('Pappkarton'),
	('INKA-Palette'),
	('Plastikpalette'),
	('Trommel'),
	('Fass'
);
