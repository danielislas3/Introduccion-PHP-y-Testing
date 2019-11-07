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


-- pgsql
CREATE TABLE public.jobs
(
    created_at timestamp without time zone[],
    description text[],
    id bigserial NOT NULL,
    title text[],
    updated_at timestamp without time zone[],
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.jobs
    OWNER to xevzbeieghwvnb;

CREATE TABLE public.proyects
(
    created_at timestamp without time zone[],
    description text[],
    id bigserial NOT NULL,
    title text[],
    updated_at timestamp without time zone[],
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.proyects
    OWNER to xevzbeieghwvnb;

CREATE TABLE public.users
(
    created_at timestamp without time zone[],
    email text[],
    id bigserial NOT NULL,
    password text[],
    updated_at timestamp without time zone[],
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.users
    OWNER to xevzbeieghwvnb;