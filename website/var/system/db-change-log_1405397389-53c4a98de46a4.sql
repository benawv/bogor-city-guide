UPDATE `classes` SET `id` = 4, `name` = 'quicklinks', `description` = '', `creationDate` = 1405325509, `modificationDate` = 1405397389, `userOwner` = 2, `userModification` = 2, `parentClass` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 4);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '4',
			  `oo_className` varchar(255) default 'quicklinks',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_4` ALTER COLUMN `oo_className` SET DEFAULT 'quicklinks';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_4` (
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

ALTER TABLE `object_query_4` CHANGE COLUMN `name` `name` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_4` CHANGE COLUMN `name` `name` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_query_4` ADD COLUMN `categories` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_categories`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_categories`;

/*--NEXT--*/

ALTER TABLE `object_query_4` CHANGE COLUMN `links` `links` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_4` CHANGE COLUMN `links` `links` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_links`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_links`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP COLUMN `categories__id`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP COLUMN `categories__type`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_4` AS SELECT * FROM `object_query_4` JOIN `objects` ON `objects`.`o_id` = `object_query_4`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_metadata_4` (
		  `o_id` int(11) NOT NULL default '0',
		  `dest_id` int(11) NOT NULL default '0',
		  `fieldname` varchar(71) NOT NULL,
		  `column` varchar(255) NOT NULL,
		  `data` text,
		  PRIMARY KEY (`o_id`,`dest_id`, `fieldname`,`column`),
          INDEX `o_id` (`o_id`),
          INDEX `dest_id` (`dest_id`),
          INDEX `fieldname` (`fieldname`),
          INDEX `column` (`column`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

