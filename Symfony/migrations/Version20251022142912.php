<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251022142912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, page_id_id INT DEFAULT NULL, position INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_1DD7470019C56181 (page_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel_image (id INT AUTO_INCREMENT NOT NULL, carousel_id_id INT NOT NULL, position INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_AABDD99B0D24791 (carousel_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, carousel_image_id INT DEFAULT NULL, slider_id INT DEFAULT NULL, url VARCHAR(255) NOT NULL, alt VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_C53D045FE1118777 (carousel_image_id), INDEX IDX_C53D045F2CCC9638 (slider_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, page_id_id INT DEFAULT NULL, subject VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, send_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', already_read TINYINT(1) NOT NULL, INDEX IDX_B6BD307F9D86650F (user_id_id), INDEX IDX_B6BD307F19C56181 (page_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price_list (id INT AUTO_INCREMENT NOT NULL, page_id_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, specification1 VARCHAR(255) NOT NULL, specification2 VARCHAR(255) DEFAULT NULL, specification3 VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_399A0AA219C56181 (page_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, page_id_id INT DEFAULT NULL, image_id_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(255) DEFAULT NULL, position INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_2D737AEF19C56181 (page_id_id), UNIQUE INDEX UNIQ_2D737AEF68011AFE (image_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, position INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carousel ADD CONSTRAINT FK_1DD7470019C56181 FOREIGN KEY (page_id_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE carousel_image ADD CONSTRAINT FK_AABDD99B0D24791 FOREIGN KEY (carousel_id_id) REFERENCES carousel (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FE1118777 FOREIGN KEY (carousel_image_id) REFERENCES carousel_image (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F2CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F19C56181 FOREIGN KEY (page_id_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE price_list ADD CONSTRAINT FK_399A0AA219C56181 FOREIGN KEY (page_id_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF19C56181 FOREIGN KEY (page_id_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF68011AFE FOREIGN KEY (image_id_id) REFERENCES image (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel DROP FOREIGN KEY FK_1DD7470019C56181');
        $this->addSql('ALTER TABLE carousel_image DROP FOREIGN KEY FK_AABDD99B0D24791');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FE1118777');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F2CCC9638');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F9D86650F');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F19C56181');
        $this->addSql('ALTER TABLE price_list DROP FOREIGN KEY FK_399A0AA219C56181');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEF19C56181');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEF68011AFE');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE carousel_image');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE price_list');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE slider');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
