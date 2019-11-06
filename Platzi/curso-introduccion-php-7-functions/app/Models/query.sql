CREATE DATABASE cursophp;
CREATE TABLE`cursophp`.`jobs` (
  `id`INT NOT NULL AUTO_INCREMENT,
  `title`TEXT NULL,
  `description`TEXT NULL,
  `visible` TINYINT(1) NULL,
  `months`INT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`));


  CREATE TABLE`cursophp`.`proyects` (
  `id`INT NOT NULL AUTO_INCREMENT,
  `title`TEXT NULL,
  `description`TEXT NULL,
  `visible` TINYINT(1) NULL,
  `months`INT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE`cursophp`.`users` (
  `id`INT NOT NULL AUTO_INCREMENT,
  `email`TEXT NULL,
  `password`TEXT NULL,
  `visible` TINYINT(1) NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`));
