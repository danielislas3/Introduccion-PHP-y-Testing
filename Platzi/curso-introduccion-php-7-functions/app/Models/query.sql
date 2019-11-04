CREATE DATABASE cursophp;
CREATE TABLE`cursophp`.`jobs` (
  `id`INT NOT NULL AUTO_INCREMENT,
  `title`TEXT NULL,
  `description`TEXT NULL,
  `visible` TINYINT(1) NULL,
  `months`INT NULL,
  PRIMARY KEY (`id`));


  CREATE TABLE`cursophp`.`proyects` (
  `id`INT NOT NULL AUTO_INCREMENT,
  `title`TEXT NULL,
  `description`TEXT NULL,
  `visible` TINYINT(1) NULL,
  `months`INT NULL,
  PRIMARY KEY (`id`));

  ALTER TABLE `jobs` ADD `created_at` DATETIME NOT NULL AFTER `months`, ADD `updated_at` DATETIME NOT NULL AFTER `created_at`;
  ALTER TABLE `proyects` ADD `created_at` DATETIME NOT NULL AFTER `months`, ADD `updated_at` DATETIME NOT NULL AFTER `created_at`;
