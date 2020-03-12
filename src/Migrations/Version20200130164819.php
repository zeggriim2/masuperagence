<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200130164819 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property ADD swimmingpool TINYINT(1) NOT NULL, ADD sauna TINYINT(1) NOT NULL, ADD wifi TINYINT(1) NOT NULL, ADD sport TINYINT(1) NOT NULL, ADD helipad TINYINT(1) NOT NULL, ADD terrasse TINYINT(1) NOT NULL, ADD balcon TINYINT(1) NOT NULL, ADD hifi TINYINT(1) NOT NULL, ADD television TINYINT(1) NOT NULL, ADD plageprox TINYINT(1) NOT NULL, ADD mervue TINYINT(1) NOT NULL, ADD montagnevue TINYINT(1) NOT NULL, ADD enville TINYINT(1) NOT NULL, ADD visavis TINYINT(1) NOT NULL, ADD plageprive TINYINT(1) NOT NULL, ADD pieddanseau TINYINT(1) NOT NULL, ADD centreville TINYINT(1) NOT NULL, ADD champetre TINYINT(1) NOT NULL, ADD typepropriete VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property DROP swimmingpool, DROP sauna, DROP wifi, DROP sport, DROP helipad, DROP terrasse, DROP balcon, DROP hifi, DROP television, DROP plageprox, DROP mervue, DROP montagnevue, DROP enville, DROP visavis, DROP plageprive, DROP pieddanseau, DROP centreville, DROP champetre, DROP typepropriete');
    }
}
