<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127155445 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces ADD nbr_de_pieces INT NOT NULL, ADD nbr_de_chambres INT NOT NULL, DROP nbrDePieces, DROP nbrDeChambres, DROP nbrSdb, DROP nbrGarage, CHANGE telephonepr telephone_pr VARCHAR(10) NOT NULL, CHANGE nompr nom_pr VARCHAR(255) NOT NULL, CHANGE mailpr mail_pr VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces ADD nbrDePieces INT NOT NULL, ADD nbrDeChambres INT NOT NULL, ADD nbrSdb VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD nbrGarage VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP nbr_de_pieces, DROP nbr_de_chambres, CHANGE telephone_pr telephonePr VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_pr nomPr VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mail_pr mailPr VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
