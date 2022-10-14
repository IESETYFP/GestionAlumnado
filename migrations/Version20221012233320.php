<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221012233320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alumno (id INT AUTO_INCREMENT NOT NULL, dni_a VARCHAR(255) NOT NULL, legajo_a VARCHAR(255) NOT NULL, nombres_a VARCHAR(255) NOT NULL, apellido_a VARCHAR(255) NOT NULL, tel_a VARCHAR(255) DEFAULT NULL, direccion_a VARCHAR(255) NOT NULL, cuil VARCHAR(255) NOT NULL, copiadni_a VARCHAR(255) NOT NULL, fechanacimiento_a VARCHAR(255) NOT NULL, lugarnacimiento_a VARCHAR(255) NOT NULL, codigopostal_a VARCHAR(255) NOT NULL, certificadovacuna_a VARCHAR(255) NOT NULL, electrocardiograma_a VARCHAR(255) NOT NULL, certificadoaptitud_a VARCHAR(255) NOT NULL, certificadosalud_a VARCHAR(255) NOT NULL, cap_a VARCHAR(255) NOT NULL, tutores VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE alumno');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
