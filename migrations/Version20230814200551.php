<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814200551 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classes CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE poMinLvl1 poMinLvl1 INT NOT NULL, CHANGE poMaxLvl1 poMaxLvl1 INT NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classeCapaciteSpeciale ADD id_class_id INT DEFAULT NULL, ADD id_capacite_id INT DEFAULT NULL, DROP idClasse, DROP idCapacite, CHANGE niveau niveau INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_12F1526CBADBE785 ON dnd35_classeCapaciteSpeciale (id_class_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_12F1526C646BD56A ON dnd35_classeCapaciteSpeciale (id_capacite_id)');
        $this->addSql('ALTER TABLE dnd35_classeCompetence CHANGE isCC isCC TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classeLeveling CHANGE donSuppGuerrier donSuppGuerrier INT NOT NULL, CHANGE bonusCa bonusCa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dnd35_classesPrestigeCapaciteSpeciale CHANGE niveau niveau INT NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classesPrestigeLeveling CHANGE bonusCa bonusCa INT DEFAULT NULL, CHANGE sortsBonus sortsBonus INT NOT NULL, CHANGE donSupp donSupp INT NOT NULL, CHANGE donSuppGuerrier donSuppGuerrier INT NOT NULL');
        $this->addSql('ALTER TABLE dnd35_dons CHANGE donSuppGuerrier donSuppGuerrier TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_langueRaceClasse CHANGE supplementaire supplementaire TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstres CHANGE vitesse vitesse DOUBLE PRECISION NOT NULL, CHANGE nage nage DOUBLE PRECISION NOT NULL, CHANGE vol vol DOUBLE PRECISION NOT NULL, CHANGE escalade escalade DOUBLE PRECISION DEFAULT NULL, CHANGE creusement creusement DOUBLE PRECISION NOT NULL, CHANGE caModifParade caModifParade INT DEFAULT NULL, CHANGE attaqueOptionnelle2 attaqueOptionnelle2 TINYINT(1) NOT NULL, CHANGE attaqueOptionnelle3 attaqueOptionnelle3 TINYINT(1) NOT NULL, CHANGE attaqueOptionnelle4 attaqueOptionnelle4 TINYINT(1) NOT NULL, CHANGE attaqueOptionnelle5 attaqueOptionnelle5 TINYINT(1) NOT NULL, CHANGE attaqueOptionnelle6 attaqueOptionnelle6 TINYINT(1) NOT NULL, CHANGE attaqueOutranceOptionnelle2 attaqueOutranceOptionnelle2 TINYINT(1) NOT NULL, CHANGE attaqueOutranceOptionnelle3 attaqueOutranceOptionnelle3 TINYINT(1) NOT NULL, CHANGE attaqueOutranceOptionnelle4 attaqueOutranceOptionnelle4 TINYINT(1) NOT NULL, CHANGE attaqueOutranceOptionnelle5 attaqueOutranceOptionnelle5 TINYINT(1) NOT NULL, CHANGE attaqueOutranceOptionnelle6 attaqueOutranceOptionnelle6 TINYINT(1) NOT NULL, CHANGE jouable jouable TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstresArchetypes CHANGE bonusForce bonusForce INT NOT NULL, CHANGE bonusDexterite bonusDexterite INT NOT NULL, CHANGE bonusConstitution bonusConstitution INT NOT NULL, CHANGE bonusIntelligence bonusIntelligence INT NOT NULL, CHANGE bonusSagesse bonusSagesse INT NOT NULL, CHANGE bonusCharisme bonusCharisme INT NOT NULL, CHANGE bonusBba bonusBba INT NOT NULL, CHANGE bonusReflexe bonusReflexe INT NOT NULL, CHANGE bonusVigueur bonusVigueur INT NOT NULL, CHANGE bonusVolonte bonusVolonte INT NOT NULL, CHANGE armureNaturelle armureNaturelle INT NOT NULL, CHANGE bonusCa bonusCa INT NOT NULL, CHANGE bonusEsquive bonusEsquive INT NOT NULL, CHANGE ajustementNiveau ajustementNiveau INT NOT NULL, CHANGE besoinCreatureBase besoinCreatureBase TINYINT(1) NOT NULL, CHANGE mortVivant mortVivant TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstresAugmentationTaille CHANGE `force` `force` INT NOT NULL, CHANGE dexterite dexterite INT NOT NULL, CHANGE constitution constitution INT NOT NULL, CHANGE armureNaturelle armureNaturelle INT NOT NULL, CHANGE caAttaque caAttaque INT NOT NULL');
        $this->addSql('ALTER TABLE dnd35_pieges CHANGE pnj pnj TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dnd35_races ADD age_id_id INT DEFAULT NULL, CHANGE modifFor modifFor INT NOT NULL, CHANGE modifDex modifDex INT NOT NULL, CHANGE modifCon modifCon INT NOT NULL, CHANGE modifInt modifInt INT NOT NULL, CHANGE modifSag modifSag INT NOT NULL, CHANGE modifCha modifCha INT NOT NULL, CHANGE nbLanguesSupplementaires nbLanguesSupplementaires INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_D2753DA0EA0F98C1 ON dnd35_races (age_id_id)');
        $this->addSql('ALTER TABLE dnd35_tresors CHANGE type type VARCHAR(25) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE classes CHANGE id id INT NOT NULL, CHANGE poMinLvl1 poMinLvl1 INT DEFAULT 0 NOT NULL, CHANGE poMaxLvl1 poMaxLvl1 INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classeCapaciteSpeciale DROP FOREIGN KEY FK_12F1526CBADBE785');
        $this->addSql('ALTER TABLE dnd35_classeCapaciteSpeciale DROP FOREIGN KEY FK_12F1526C646BD56A');
        $this->addSql('DROP INDEX IDX_12F1526CBADBE785 ON dnd35_classeCapaciteSpeciale');
        $this->addSql('DROP INDEX UNIQ_12F1526C646BD56A ON dnd35_classeCapaciteSpeciale');
        $this->addSql('ALTER TABLE dnd35_classeCapaciteSpeciale ADD idClasse INT NOT NULL, ADD idCapacite INT NOT NULL, DROP id_class_id, DROP id_capacite_id, CHANGE niveau niveau INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classeCompetence CHANGE isCC isCC TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classeLeveling CHANGE donSuppGuerrier donSuppGuerrier INT DEFAULT 0 NOT NULL, CHANGE bonusCa bonusCa INT DEFAULT 0');
        $this->addSql('ALTER TABLE dnd35_classesPrestigeCapaciteSpeciale CHANGE niveau niveau INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_classesPrestigeLeveling CHANGE bonusCa bonusCa INT DEFAULT 0, CHANGE sortsBonus sortsBonus INT DEFAULT 0 NOT NULL, CHANGE donSupp donSupp INT DEFAULT 0 NOT NULL, CHANGE donSuppGuerrier donSuppGuerrier INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_dons CHANGE donSuppGuerrier donSuppGuerrier TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_langueRaceClasse CHANGE supplementaire supplementaire TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstres CHANGE vitesse vitesse DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE nage nage DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE vol vol DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE escalade escalade DOUBLE PRECISION DEFAULT \'0\', CHANGE creusement creusement DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE caModifParade caModifParade INT DEFAULT 0, CHANGE attaqueOptionnelle2 attaqueOptionnelle2 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOptionnelle3 attaqueOptionnelle3 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOptionnelle4 attaqueOptionnelle4 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOptionnelle5 attaqueOptionnelle5 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOptionnelle6 attaqueOptionnelle6 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOutranceOptionnelle2 attaqueOutranceOptionnelle2 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOutranceOptionnelle3 attaqueOutranceOptionnelle3 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOutranceOptionnelle4 attaqueOutranceOptionnelle4 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOutranceOptionnelle5 attaqueOutranceOptionnelle5 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE attaqueOutranceOptionnelle6 attaqueOutranceOptionnelle6 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE jouable jouable TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstresArchetypes CHANGE bonusForce bonusForce INT DEFAULT 0 NOT NULL, CHANGE bonusDexterite bonusDexterite INT DEFAULT 0 NOT NULL, CHANGE bonusConstitution bonusConstitution INT DEFAULT 0 NOT NULL, CHANGE bonusIntelligence bonusIntelligence INT DEFAULT 0 NOT NULL, CHANGE bonusSagesse bonusSagesse INT DEFAULT 0 NOT NULL, CHANGE bonusCharisme bonusCharisme INT DEFAULT 0 NOT NULL, CHANGE bonusBba bonusBba INT DEFAULT 0 NOT NULL, CHANGE bonusReflexe bonusReflexe INT DEFAULT 0 NOT NULL, CHANGE bonusVigueur bonusVigueur INT DEFAULT 0 NOT NULL, CHANGE bonusVolonte bonusVolonte INT DEFAULT 0 NOT NULL, CHANGE armureNaturelle armureNaturelle INT DEFAULT 0 NOT NULL, CHANGE bonusCa bonusCa INT DEFAULT 0 NOT NULL, CHANGE bonusEsquive bonusEsquive INT DEFAULT 0 NOT NULL, CHANGE ajustementNiveau ajustementNiveau INT DEFAULT 0 NOT NULL, CHANGE besoinCreatureBase besoinCreatureBase TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE mortVivant mortVivant TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_monstresAugmentationTaille CHANGE `force` `force` INT DEFAULT 0 NOT NULL, CHANGE dexterite dexterite INT DEFAULT 0 NOT NULL, CHANGE constitution constitution INT DEFAULT 0 NOT NULL, CHANGE armureNaturelle armureNaturelle INT DEFAULT 0 NOT NULL, CHANGE caAttaque caAttaque INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_pieges CHANGE pnj pnj TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE dnd35_races DROP FOREIGN KEY FK_D2753DA0EA0F98C1');
        $this->addSql('DROP INDEX IDX_D2753DA0EA0F98C1 ON dnd35_races');
        $this->addSql('ALTER TABLE dnd35_races DROP age_id_id, CHANGE modifFor modifFor INT DEFAULT 0 NOT NULL, CHANGE modifDex modifDex INT DEFAULT 0 NOT NULL, CHANGE modifCon modifCon INT DEFAULT 0 NOT NULL, CHANGE modifInt modifInt INT DEFAULT 0 NOT NULL, CHANGE modifSag modifSag INT DEFAULT 0 NOT NULL, CHANGE modifCha modifCha INT DEFAULT 0 NOT NULL, CHANGE nbLanguesSupplementaires nbLanguesSupplementaires INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dnd35_tresors CHANGE type type VARCHAR(25) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
    }
}
