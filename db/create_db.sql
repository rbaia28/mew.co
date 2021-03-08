CREATE DATABASE IF NOT EXISTS `mew_co`;

USE `mew_co`;

CREATE TABLE IF NOT EXISTS `contact_method`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `method` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `location`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `address` VARCHAR(100) DEFAULT NULL,
    `municipality` VARCHAR(20) DEFAULT NULL,
    `region` VARCHAR(20) DEFAULT NULL,
    `postal_code` VARCHAR(10) DEFAULT NULL,
    `country` VARCHAR(20) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `pokemon`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `uuid` INT NOT NULL,
    `dex_id` INT NOT NULL,
    `nickname` VARCHAR(20) NOT NULL,
    `is_shiny` TINYINT NOT NULL DEFAULT '0',
    `cp` INT NOT NULL,
    `current_level` INT NOT NULL,
    `location_id` INT NOT NULL,
    `trainer_id` INT NOT NULL,
    `is_archived` TINYINT NOT NULL DEFAULT '0',
    PRIMARY KEY(`id`),
    UNIQUE KEY `uuid`(`uuid`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `raid_chat`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `location` VARCHAR(100) NOT NULL,
    `owner_uuid` INT NOT NULL,
    `contact_method` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `team`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `color` VARCHAR(20) NOT NULL,
    PRIMARY KEY(`id`),
    UNIQUE KEY `name`(`name`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `trade_history`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `trainer_1_id` INT NOT NULL,
    `trainer_2_id` INT NOT NULL,
    `pokemon_id` INT NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `trainer`(
    `uuid` INT NOT NULL AUTO_INCREMENT,
    `trainer_name` VARCHAR(30) NOT NULL,
    `friend_code` VARCHAR(12) NOT NULL,
    `team_id` INT NOT NULL,
    `contact_method` VARCHAR(30) DEFAULT NULL,
    `level` INT NOT NULL,
    `location_id` INT DEFAULT NULL,
    PRIMARY KEY(`uuid`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `trainer_friends`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `trainer_1_id` INT NOT NULL,
    `trainer_2_id` INT NOT NULL,
    `friend_level` FLOAT NOT NULL DEFAULT '1',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `user`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `firstName` VARCHAR(20) NOT NULL,
    `lastName` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`),
    UNIQUE KEY `email`(`email`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS `wishlist`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `trainer_uuid` INT NOT NULL,
    `pokemin_id` INT NOT NULL,
    `completed` TINYINT NOT NULL DEFAULT '0',
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;