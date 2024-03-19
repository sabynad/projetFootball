<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319110824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opposition ADD id_equipe_1 INT NOT NULL');
        $this->addSql('ALTER TABLE opposition ADD CONSTRAINT FK_10CBCFC261FE2704 FOREIGN KEY (id_equipe_1) REFERENCES equipe (id_equipe)');
        $this->addSql('CREATE INDEX IDX_10CBCFC261FE2704 ON opposition (id_equipe_1)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opposition DROP FOREIGN KEY FK_10CBCFC261FE2704');
        $this->addSql('DROP INDEX IDX_10CBCFC261FE2704 ON opposition');
        $this->addSql('ALTER TABLE opposition DROP id_equipe_1');
    }
}
