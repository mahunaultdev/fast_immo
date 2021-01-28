<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127162247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonces (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) DEFAULT NULL, adresse VARCHAR(100) DEFAULT NULL, cp VARCHAR(5) DEFAULT NULL, ville VARCHAR(50) DEFAULT NULL, description VARCHAR(255) NOT NULL, surface NUMERIC(5, 2) DEFAULT NULL, nbr_de_pieces INT DEFAULT NULL, nbr_de_chambres INT DEFAULT NULL, prix NUMERIC(5, 2) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, telephone_pr VARCHAR(10) DEFAULT NULL, nom_pr VARCHAR(255) DEFAULT NULL, mail_pr VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE annonces');
    }
}
