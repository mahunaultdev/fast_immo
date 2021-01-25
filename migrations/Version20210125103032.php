<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125103032 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonces (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, cp VARCHAR(5) NOT NULL, ville VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, nbr_de_pieces INT NOT NULL, nbr_de_chambres INT NOT NULL, prix DOUBLE PRECISION NOT NULL, photo VARCHAR(255) NOT NULL, telephone_pr VARCHAR(10) NOT NULL, nom_pr VARCHAR(255) NOT NULL, mail_pr VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(10) NOT NULL, date_de_naissance VARCHAR(50) NOT NULL, mot_de_passe VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE annonces');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
