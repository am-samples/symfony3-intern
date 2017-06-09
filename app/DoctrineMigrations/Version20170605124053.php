<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170605124053 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE items_menu ADD custom_link VARCHAR(30) DEFAULT NULL, CHANGE link link VARCHAR(30) DEFAULT NULL');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("Главная", "homepage", 1)');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("Новости", "news", 1)');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("Заявки", "callback_list", 1)');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("Кавычки", "forest", 1)');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("Обратная связь", "callback_form", 1)');
        $this->addSql('INSERT INTO items_menu(name, link, active) VALUES("CMS", "sonata_admin_dashboard", 1)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE items_menu DROP custom_link, CHANGE link link VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci');
    }
}
