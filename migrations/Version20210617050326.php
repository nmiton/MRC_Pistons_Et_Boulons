<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617050326 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__collaborateur AS SELECT id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin FROM collaborateur');
        $this->addSql('DROP TABLE collaborateur');
        $this->addSql('CREATE TABLE collaborateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE BINARY, prenom VARCHAR(255) NOT NULL COLLATE BINARY, date_naissance DATE NOT NULL, date_entree_entreprise DATE NOT NULL, num_securite_social BIGINT NOT NULL, type_contrat VARCHAR(255) NOT NULL COLLATE BINARY, date_heure_derniere_connexion DATETIME DEFAULT NULL, duree_travail_hebdo VARCHAR(255) NOT NULL COLLATE BINARY, login VARCHAR(255) NOT NULL COLLATE BINARY, mot_de_passe VARCHAR(255) NOT NULL COLLATE BINARY, is_admin BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO collaborateur (id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin) SELECT id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin FROM __temp__collaborateur');
        $this->addSql('DROP TABLE __temp__collaborateur');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__collaborateur AS SELECT id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin FROM collaborateur');
        $this->addSql('DROP TABLE collaborateur');
        $this->addSql('CREATE TABLE collaborateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, date_entree_entreprise DATE NOT NULL, num_securite_social BIGINT NOT NULL, type_contrat VARCHAR(255) NOT NULL, date_heure_derniere_connexion DATETIME DEFAULT NULL, duree_travail_hebdo VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, is_admin BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO collaborateur (id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin) SELECT id, nom, prenom, date_naissance, date_entree_entreprise, num_securite_social, type_contrat, date_heure_derniere_connexion, duree_travail_hebdo, login, mot_de_passe, is_admin FROM __temp__collaborateur');
        $this->addSql('DROP TABLE __temp__collaborateur');
    }
}
