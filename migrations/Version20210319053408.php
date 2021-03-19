<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319053408 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact_method (id INT AUTO_INCREMENT NOT NULL, method VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, address VARCHAR(100) DEFAULT NULL, municipality VARCHAR(20) DEFAULT NULL, region VARCHAR(20) DEFAULT NULL, postal_code VARCHAR(10) DEFAULT NULL, country VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokemon (id INT AUTO_INCREMENT NOT NULL, uuid INT NOT NULL, dex_id INT NOT NULL, nickname VARCHAR(20) NOT NULL, is_shiny TINYINT(1) NOT NULL, cp INT NOT NULL, current_level INT NOT NULL, location_id INT NOT NULL, trainer_id INT NOT NULL, is_archived TINYINT(1) NOT NULL, UNIQUE INDEX uuid (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE raid_chat (id INT AUTO_INCREMENT NOT NULL, location VARCHAR(100) NOT NULL, owner_uuid INT NOT NULL, contact_method VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, color VARCHAR(20) NOT NULL, UNIQUE INDEX name (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trade_history (id INT AUTO_INCREMENT NOT NULL, trainer_1_id INT NOT NULL, trainer_2_id INT NOT NULL, pokemon_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trainer (uuid INT AUTO_INCREMENT NOT NULL, trainer_name VARCHAR(30) NOT NULL, friend_code VARCHAR(12) NOT NULL, team_id INT NOT NULL, contact_method VARCHAR(30) DEFAULT NULL, level INT NOT NULL, location_id INT DEFAULT NULL, PRIMARY KEY(uuid)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trainer_friends (id INT AUTO_INCREMENT NOT NULL, trainer_1_id INT NOT NULL, trainer_2_id INT NOT NULL, friend_level DOUBLE PRECISION DEFAULT \'1\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstName VARCHAR(20) NOT NULL, lastName VARCHAR(20) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, UNIQUE INDEX email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wishlist (id INT AUTO_INCREMENT NOT NULL, trainer_uuid INT NOT NULL, pokemin_id INT NOT NULL, completed TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contact_method');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE pokemon');
        $this->addSql('DROP TABLE raid_chat');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE trade_history');
        $this->addSql('DROP TABLE trainer');
        $this->addSql('DROP TABLE trainer_friends');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE wishlist');
    }
}
