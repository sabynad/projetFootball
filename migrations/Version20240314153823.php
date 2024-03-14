<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314153823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainer ADD equipe_id INT NOT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE entrainer ADD CONSTRAINT FK_6DE5B5926D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE entrainer ADD CONSTRAINT FK_6DE5B592A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6DE5B5926D861B89 ON entrainer (equipe_id)');
        $this->addSql('CREATE INDEX IDX_6DE5B592A76ED395 ON entrainer (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainer DROP FOREIGN KEY FK_6DE5B5926D861B89');
        $this->addSql('ALTER TABLE entrainer DROP FOREIGN KEY FK_6DE5B592A76ED395');
        $this->addSql('DROP INDEX IDX_6DE5B5926D861B89 ON entrainer');
        $this->addSql('DROP INDEX IDX_6DE5B592A76ED395 ON entrainer');
        $this->addSql('ALTER TABLE entrainer DROP equipe_id, DROP user_id');
    }
}
