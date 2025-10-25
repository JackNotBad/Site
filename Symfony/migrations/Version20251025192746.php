<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251025192746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE price_list ADD section_title_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE price_list ADD CONSTRAINT FK_399A0AA29AF2DDE1 FOREIGN KEY (section_title_id) REFERENCES section (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_399A0AA29AF2DDE1 ON price_list (section_title_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE price_list DROP FOREIGN KEY FK_399A0AA29AF2DDE1');
        $this->addSql('DROP INDEX UNIQ_399A0AA29AF2DDE1 ON price_list');
        $this->addSql('ALTER TABLE price_list DROP section_title_id');
    }
}
