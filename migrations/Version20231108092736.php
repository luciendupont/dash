<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231108092736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE typedeboxe DROP FOREIGN KEY FK_FFDBAA05C88D977A');
        $this->addSql('DROP TABLE typedeboxe');
        $this->addSql('ALTER TABLE boxeur ADD typedelicence VARCHAR(255) NOT NULL, DROP sexe, DROP photo, DROP categorielicence, CHANGE licencecreele licencecreele VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE typedeboxe (id INT AUTO_INCREMENT NOT NULL, formedeboxe_id INT DEFAULT NULL, active TINYINT(1) NOT NULL, INDEX IDX_FFDBAA05C88D977A (formedeboxe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE typedeboxe ADD CONSTRAINT FK_FFDBAA05C88D977A FOREIGN KEY (formedeboxe_id) REFERENCES boxeur (id)');
        $this->addSql('ALTER TABLE boxeur ADD photo VARCHAR(255) NOT NULL, ADD categorielicence VARCHAR(255) NOT NULL, CHANGE licencecreele licencecreele DATETIME NOT NULL, CHANGE typedelicence sexe VARCHAR(255) NOT NULL');
    }
}
