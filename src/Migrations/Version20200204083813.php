<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200204083813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, surface INT NOT NULL, rooms INT NOT NULL, bedrooms INT NOT NULL, floor INT NOT NULL, price INT NOT NULL, heat INT NOT NULL, city VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, sold TINYINT(1) DEFAULT \'0\' NOT NULL, created_at DATETIME NOT NULL, swimmingpool TINYINT(1) NOT NULL, sauna TINYINT(1) NOT NULL, wifi TINYINT(1) NOT NULL, sport TINYINT(1) NOT NULL, helipad TINYINT(1) NOT NULL, terrasse TINYINT(1) NOT NULL, balcon TINYINT(1) NOT NULL, hifi TINYINT(1) NOT NULL, television TINYINT(1) NOT NULL, plageprox TINYINT(1) NOT NULL, mervue TINYINT(1) NOT NULL, montagnevue TINYINT(1) NOT NULL, enville TINYINT(1) NOT NULL, visavis TINYINT(1) NOT NULL, plageprive TINYINT(1) NOT NULL, pieddanseau TINYINT(1) NOT NULL, centreville TINYINT(1) NOT NULL, champetre TINYINT(1) NOT NULL, typepropriete VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE property');
    }
}
