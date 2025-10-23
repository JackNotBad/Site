<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251022192420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE slider_image (id INT AUTO_INCREMENT NOT NULL, slider_id INT NOT NULL, image_id INT NOT NULL, position INT NOT NULL, INDEX IDX_4389483B2CCC9638 (slider_id), INDEX IDX_4389483B3DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B2CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE carousel DROP FOREIGN KEY FK_1DD7470019C56181');
        $this->addSql('DROP INDEX IDX_1DD7470019C56181 ON carousel');
        $this->addSql('ALTER TABLE carousel ADD title VARCHAR(255) NOT NULL, DROP page_id_id, DROP created_at, CHANGE position page_id INT NOT NULL');
        $this->addSql('ALTER TABLE carousel ADD CONSTRAINT FK_1DD74700C4663E4 FOREIGN KEY (page_id) REFERENCES page (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_1DD74700C4663E4 ON carousel (page_id)');
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD99B0D24791');
        $this->addSql('DROP INDEX IDX_AABDD99B0D24791 ON carousel_image');
        $this->addSql('ALTER TABLE carousel_image ADD image_id INT NOT NULL, DROP created_at, CHANGE carousel_id_id carousel_id INT NOT NULL');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD99C1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD993DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE RESTRICT');
        $this->addSql('CREATE INDEX IDX_AABDD99C1CE5B98 ON carousel_image (carousel_id)');
        $this->addSql('CREATE INDEX IDX_AABDD993DA5256D ON carousel_image (image_id)');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F2CCC9638');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FE1118777');
        $this->addSql('DROP INDEX IDX_C53D045F2CCC9638 ON image');
        $this->addSql('DROP INDEX IDX_C53D045FE1118777 ON image');
        $this->addSql('ALTER TABLE image DROP carousel_image_id, DROP slider_id');
        $this->addSql('ALTER TABLE section DROP INDEX UNIQ_2D737AEF68011AFE, ADD INDEX IDX_2D737AEF68011AFE (image_id_id)');
        $this->addSql('ALTER TABLE slider ADD title VARCHAR(255) NOT NULL, DROP created_at, CHANGE position page_id INT NOT NULL');
        $this->addSql('ALTER TABLE slider ADD CONSTRAINT FK_CFC71007C4663E4 FOREIGN KEY (page_id) REFERENCES page (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_CFC71007C4663E4 ON slider (page_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B2CCC9638');
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B3DA5256D');
        $this->addSql('DROP TABLE slider_image');
        $this->addSql('ALTER TABLE image ADD carousel_image_id INT DEFAULT NULL, ADD slider_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F2CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FE1118777 FOREIGN KEY (carousel_image_id) REFERENCES carousel_image (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C53D045F2CCC9638 ON image (slider_id)');
        $this->addSql('CREATE INDEX IDX_C53D045FE1118777 ON image (carousel_image_id)');
        $this->addSql('ALTER TABLE carousel DROP FOREIGN KEY FK_1DD74700C4663E4');
        $this->addSql('DROP INDEX IDX_1DD74700C4663E4 ON carousel');
        $this->addSql('ALTER TABLE carousel ADD page_id_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP title, CHANGE page_id position INT NOT NULL');
        $this->addSql('ALTER TABLE carousel ADD CONSTRAINT FK_1DD7470019C56181 FOREIGN KEY (page_id_id) REFERENCES page (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1DD7470019C56181 ON carousel (page_id_id)');
        $this->addSql('ALTER TABLE section DROP INDEX IDX_2D737AEF68011AFE, ADD UNIQUE INDEX UNIQ_2D737AEF68011AFE (image_id_id)');
        $this->addSql('ALTER TABLE slider DROP FOREIGN KEY FK_CFC71007C4663E4');
        $this->addSql('DROP INDEX IDX_CFC71007C4663E4 ON slider');
        $this->addSql('ALTER TABLE slider ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP title, CHANGE page_id position INT NOT NULL');
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD99C1CE5B98');
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD993DA5256D');
        $this->addSql('DROP INDEX IDX_AABDD99C1CE5B98 ON carousel_image');
        $this->addSql('DROP INDEX IDX_AABDD993DA5256D ON carousel_image');
        $this->addSql('ALTER TABLE carousel_image ADD carousel_id_id INT NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP carousel_id, DROP image_id');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD99B0D24791 FOREIGN KEY (carousel_id_id) REFERENCES carousel (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_AABDD99B0D24791 ON carousel_image (carousel_id_id)');
    }
}
