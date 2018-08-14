DROP DATABASE IF EXISTS cargoliti;
CREATE DATABASE IF NOT EXISTS cargoliti;
USE cargoliti;

CREATE TABLE `lager` (
      `id` int(6) unsigned ZEROFILL AUTO_INCREMENT  NOT NULL,
      `user_id` int(5) NOT NULL,
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
      `kgs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
      `cbm` varchar(50) COLLATE utf8_unicode_ci NULL,
      `cbm_final` varchar(50) COLLATE utf8_unicode_ci NULL,
      `markierung` varchar(50) COLLATE utf8_unicode_ci NULL,
      `zollware` BOOLEAN NOT NULL,
      `imo_ware` BOOLEAN NOT NULL,
      `un_code` varchar(50) COLLATE utf8_unicode_ci NULL,
      `hinweis` varchar(50) COLLATE utf8_unicode_ci NULL,
      `angelegt_am` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `aktualisiert_am` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
