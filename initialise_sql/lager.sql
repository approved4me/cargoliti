DROP DATABASE IF EXISTS cargoliti;
CREATE DATABASE IF NOT EXISTS cargoliti;
USE cargoliti;

CREATE TABLE IF NOT EXISTS `user` (
      `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
      `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `updated_at` timestamp NULL DEFAULT NULL,
      `passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
      `passwortcode_time` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`), UNIQUE (`email`)      
      )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `lager` (
      `id` int(6) unsigned ZEROFILL AUTO_INCREMENT  NOT NULL,
      `user_id` int(5) unsigned NOT NULL,
      `position` varchar(50) COLLATE utf8_unicode_ci NULL,
      `shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
      `position_shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
      `email_shipper` varchar(50) COLLATE utf8_unicode_ci NULL,
      `position_agent` varchar(50) COLLATE utf8_unicode_ci NULL,
      `email_agent` varchar(50) COLLATE utf8_unicode_ci NULL,
      `consignee` varchar(50) COLLATE utf8_unicode_ci NULL,
      `schiff` varchar(50) COLLATE utf8_unicode_ci NULL,
      `pod` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
      `anzahl` int(5) NOT NULL,
      `verpackung_id` int(5) NOT NULL,
      `beschreibung` varchar(50) COLLATE utf8_unicode_ci NULL,
      `kgs` float(5) NOT NULL,
      `cbm` float(5) NOT NULL,
      `cbm_final` float(5) NOT NULL,
      `markierung` varchar(50) COLLATE utf8_unicode_ci NULL,
      `zollware` BOOLEAN NOT NULL,
      `imo_ware` BOOLEAN NOT NULL,
      `un_code` varchar(50) COLLATE utf8_unicode_ci NULL,
      `hinweis` varchar(50) COLLATE utf8_unicode_ci NULL,
      `angelegt_am` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `aktualisiert_am` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`),
      FOREIGN KEY (`user_id`) REFERENCES  user(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user`(
    `vorname`,
    `nachname`,
    `email`,
    `passwort`,
    `created_at`
)
VALUES(
    'Vorname',
    'Nachname',
    'Email@Mail.com',
    'Passwort',
    CURRENT_TIMESTAMP
);
