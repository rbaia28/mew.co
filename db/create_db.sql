CREATE DATABASE IF NOT EXIST mew_co;

USE DATABASE mew_co;

CREATE TABLE IF NOT EXIST `trainers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `contact_method` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `method` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `raid_chat` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `location` varchar(100) NOT NULL,
 `owner_uuid` int(11) NOT NULL,
 `contact_method` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8