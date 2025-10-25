<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251025212942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE price_list DROP FOREIGN KEY FK_399A0AA29AF2DDE1');
        $this->addSql('DROP INDEX UNIQ_399A0AA29AF2DDE1 ON price_list');
        $this->addSql('ALTER TABLE price_list ADD titre_section VARCHAR(255) DEFAULT NULL, CHANGE section_title_id section_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE price_list ADD CONSTRAINT FK_399A0AA2D823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('CREATE INDEX IDX_399A0AA2D823E37A ON price_list (section_id)');
        $this->addSql('ALTER TABLE section ADD title VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section DROP title');
        $this->addSql('ALTER TABLE price_list DROP FOREIGN KEY FK_399A0AA2D823E37A');
        $this->addSql('DROP INDEX IDX_399A0AA2D823E37A ON price_list');
        $this->addSql('ALTER TABLE price_list DROP titre_section, CHANGE section_id section_title_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE price_list ADD CONSTRAINT FK_399A0AA29AF2DDE1 FOREIGN KEY (section_title_id) REFERENCES section (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_399A0AA29AF2DDE1 ON price_list (section_title_id)');
    }
}
