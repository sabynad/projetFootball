<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314160118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opposition (id_equipe_id INT NOT NULL, id_equipe_1_id INT NOT NULL, Id_opposition INT AUTO_INCREMENT NOT NULL, matchs VARCHAR(255) NOT NULL, dates DATE NOT NULL, resultats VARCHAR(255) NOT NULL, scores VARCHAR(255) NOT NULL, points INT NOT NULL, INDEX IDX_10CBCFC2EDB3A7AE (id_equipe_id), INDEX IDX_10CBCFC2E18800F3 (id_equipe_1_id), PRIMARY KEY(Id_opposition)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE opposition ADD CONSTRAINT FK_10CBCFC2EDB3A7AE FOREIGN KEY (id_equipe_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE opposition ADD CONSTRAINT FK_10CBCFC2E18800F3 FOREIGN KEY (id_equipe_1_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opposition DROP FOREIGN KEY FK_10CBCFC2EDB3A7AE');
        $this->addSql('ALTER TABLE opposition DROP FOREIGN KEY FK_10CBCFC2E18800F3');
        $this->addSql('DROP TABLE opposition');
    }
}
