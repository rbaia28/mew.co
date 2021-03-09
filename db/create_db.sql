CREATE DATABASE IF NOT EXISTS mew_co;

USE mew_co;

CREATE TABLE IF NOT EXISTS `trainers` (
 `uuid` int(11) NOT NULL AUTO_INCREMENT,
 `trainer_name` varchar(30) NOT NULL,
 `friend_code` varchar(12) NOT NULL,
 `team_id` int(11) NOT NULL,
 `contact_method` varchar(30) DEFAULT NULL,
 `level` int(11) NOT NULL,
 `municipality` varchar(30) DEFAULT NULL,
 `postal_code` varchar(30) DEFAULT NULL,
 `region` varchar(30) DEFAULT NULL,
 `country` varchar(30) DEFAULT NULL,
 PRIMARY KEY (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `contact_method` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `method` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `raid_chat` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `location` varchar(100) NOT NULL,
 `owner_uuid` int(11) NOT NULL,
 `contact_method` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `wishlist` (
 `id` int NOT NULL AUTO_INCREMENT,
 `trainer_uuid` int NOT NULL,
 `pokemin_id` int NOT NULL,
 `completed` tinyint NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;