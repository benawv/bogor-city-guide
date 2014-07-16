UPDATE `classes` SET `id` = 7, `name` = 'marketingOffice', `description` = '', `creationDate` = 1405411898, `modificationDate` = 1405419457, `userOwner` = 2, `userModification` = 2, `parentClass` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 7);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_7` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '7',
			  `oo_className` varchar(255) default 'marketingOffice',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_7` ALTER COLUMN `oo_className` SET DEFAULT 'marketingOffice';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_7` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_7` (
          `src_id` int(11) NOT NULL DEFAULT '0',
          `dest_id` int(11) NOT NULL DEFAULT '0',
          `type` varchar(50) NOT NULL DEFAULT '',
          `fieldname` varchar(70) NOT NULL DEFAULT '0',
          `index` int(11) unsigned NOT NULL DEFAULT '0',
          `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
          `ownername` varchar(70) NOT NULL DEFAULT '',
          `position` varchar(70) NOT NULL DEFAULT '0',
          PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
          KEY `index` (`index`),
          KEY `src_id` (`src_id`),
          KEY `dest_id` (`dest_id`),
          KEY `fieldname` (`fieldname`),
          KEY `position` (`position`),
          KEY `ownertype` (`ownertype`),
          KEY `type` (`type`),
          KEY `ownername` (`ownername`)
        ) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `latitude` `latitude` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `latitude` `latitude` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_latitude`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_latitude`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `longitude` `longitude` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `longitude` `longitude` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_longitude`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_longitude`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `image` `image` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `image` `image` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_image`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_image`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `officeName` `officeName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `officeName` `officeName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_officeName`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_officeName`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `subName` `subName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `subName` `subName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_subName`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_subName`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `alamat` `alamat` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `alamat` `alamat` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_alamat`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_alamat`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `phone` `phone` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `phone` `phone` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_phone`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_phone`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `fax` `fax` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `fax` `fax` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_fax`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_fax`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `tipe` `tipe` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `tipe` `tipe` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_tipe`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_tipe`;

/*--NEXT--*/

ALTER TABLE `object_query_7` CHANGE COLUMN `groups` `groups` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` CHANGE COLUMN `groups` `groups` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_groups`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_groups`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_7` AS SELECT * FROM `object_query_7` JOIN `objects` ON `objects`.`o_id` = `object_query_7`.`oo_id`;

/*--NEXT--*/

