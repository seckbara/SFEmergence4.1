<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181201131351 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, adherent_id INT NOT NULL, date_certificat DATETIME NOT NULL, date_abonnement DATETIME NOT NULL, duree_abonnement VARCHAR(10) NOT NULL, date_fin_abonnement DATETIME NOT NULL, montant VARCHAR(255) NOT NULL, INDEX IDX_351268BB25F06C53 (adherent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adherent (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, date_naissance VARCHAR(50) NOT NULL, sexe VARCHAR(15) NOT NULL, telephone VARCHAR(50) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, certificat VARCHAR(3) NOT NULL, nume_secu VARCHAR(255) NOT NULL, document VARCHAR(255) NOT NULL, commentaire LONGTEXT NOT NULL, photo VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, user VARCHAR(255) NOT NULL, situation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB25F06C53 FOREIGN KEY (adherent_id) REFERENCES adherent (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB25F06C53');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE adherent');
    }
}
