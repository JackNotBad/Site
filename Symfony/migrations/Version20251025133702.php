<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251025133702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE details_section_image (id INT AUTO_INCREMENT NOT NULL, section_id INT DEFAULT NULL, position INT DEFAULT NULL, INDEX IDX_1AF53CE5D823E37A (section_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE details_section_image ADD CONSTRAINT FK_1AF53CE5D823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('ALTER TABLE image ADD details_section_image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F774CA80D FOREIGN KEY (details_section_image_id) REFERENCES details_section_image (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F774CA80D ON image (details_section_image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F774CA80D');
        $this->addSql('ALTER TABLE details_section_image DROP FOREIGN KEY FK_1AF53CE5D823E37A');
        $this->addSql('DROP TABLE details_section_image');
        $this->addSql('DROP INDEX IDX_C53D045F774CA80D ON image');
        $this->addSql('ALTER TABLE image DROP details_section_image_id');
    }
}
