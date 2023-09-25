<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresarchetypes
 *
 * @ORM\Table(name="dnd35_monstresArchetypes")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresArchetypesRepository")
 */
class Dnd35Monstresarchetypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="limitationTypes", type="string", length=255, nullable=true)
     */
    private $limitationtypes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modificationsType", type="text", length=65535, nullable=true)
     */
    private $modificationstype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modificationsSousType", type="text", length=65535, nullable=true)
     */
    private $modificationssoustype;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusForce", type="integer", nullable=false)
     */
    private $bonusforce = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusDexterite", type="integer", nullable=false)
     */
    private $bonusdexterite = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusConstitution", type="integer", nullable=false)
     */
    private $bonusconstitution = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusIntelligence", type="integer", nullable=false)
     */
    private $bonusintelligence = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusSagesse", type="integer", nullable=false)
     */
    private $bonussagesse = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusCharisme", type="integer", nullable=false)
     */
    private $bonuscharisme = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vitesseDeplacement", type="integer", nullable=false, options={"default"="9"})
     */
    private $vitessedeplacement = 9;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=3, nullable=false, options={"default"="M"})
     */
    private $taille = 'M';

    /**
     * @var string|null
     *
     * @ORM\Column(name="capacites", type="text", length=65535, nullable=true)
     */
    private $capacites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desVie", type="string", length=255, nullable=true)
     */
    private $desvie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bonusDesVie", type="string", length=255, nullable=true)
     */
    private $bonusdesvie;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusBba", type="integer", nullable=false)
     */
    private $bonusbba = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusLutte", type="integer", nullable=true)
     */
    private $bonuslutte;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusReflexe", type="integer", nullable=false)
     */
    private $bonusreflexe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusVigueur", type="integer", nullable=false)
     */
    private $bonusvigueur = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusVolonte", type="integer", nullable=false)
     */
    private $bonusvolonte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bonusCompetences", type="string", length=255, nullable=true)
     */
    private $bonuscompetences;

    /**
     * @var string|null
     *
     * @ORM\Column(name="competencesRaciales", type="text", length=65535, nullable=true)
     */
    private $competencesraciales;

    /**
     * @var string
     *
     * @ORM\Column(name="donsRaciaux", type="text", length=65535, nullable=false)
     */
    private $donsraciaux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="donsBonus", type="text", length=65535, nullable=true)
     */
    private $donsbonus;

    /**
     * @var int
     *
     * @ORM\Column(name="armureNaturelle", type="integer", nullable=false)
     */
    private $armurenaturelle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusCa", type="integer", nullable=false)
     */
    private $bonusca = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bonusEsquive", type="integer", nullable=false)
     */
    private $bonusesquive = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="resistances", type="text", length=65535, nullable=true)
     */
    private $resistances;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bonusCompetencesRaciales", type="text", length=65535, nullable=true)
     */
    private $bonuscompetencesraciales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaques", type="text", length=65535, nullable=true)
     */
    private $attaques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaquesSpeciales", type="text", length=65535, nullable=true)
     */
    private $attaquesspeciales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="particularites", type="text", length=65535, nullable=true)
     */
    private $particularites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pouvoirs", type="text", length=65535, nullable=true)
     */
    private $pouvoirs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pouvoirsMagiques", type="text", length=65535, nullable=true)
     */
    private $pouvoirsmagiques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maniements", type="text", length=65535, nullable=true)
     */
    private $maniements;

    /**
     * @var string|null
     *
     * @ORM\Column(name="degats", type="text", length=65535, nullable=true)
     */
    private $degats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classPredilection", type="string", length=255, nullable=true)
     */
    private $classpredilection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langues", type="string", length=255, nullable=true)
     */
    private $langues;

    /**
     * @var int
     *
     * @ORM\Column(name="ajustementNiveau", type="integer", nullable=false)
     */
    private $ajustementniveau = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fp", type="text", length=65535, nullable=true)
     */
    private $fp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alignement", type="string", length=500, nullable=true)
     */
    private $alignement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prerequis", type="text", length=65535, nullable=true)
     */
    private $prerequis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="environnement", type="string", length=255, nullable=true)
     */
    private $environnement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organisationSociale", type="string", length=255, nullable=true)
     */
    private $organisationsociale;

    /**
     * @var bool
     *
     * @ORM\Column(name="besoinCreatureBase", type="boolean", nullable=false)
     */
    private $besoincreaturebase = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mortVivant", type="boolean", nullable=false)
     */
    private $mortvivant = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLimitationtypes(): ?string
    {
        return $this->limitationtypes;
    }

    public function setLimitationtypes(?string $limitationtypes): self
    {
        $this->limitationtypes = $limitationtypes;

        return $this;
    }

    public function getModificationstype(): ?string
    {
        return $this->modificationstype;
    }

    public function setModificationstype(?string $modificationstype): self
    {
        $this->modificationstype = $modificationstype;

        return $this;
    }

    public function getModificationssoustype(): ?string
    {
        return $this->modificationssoustype;
    }

    public function setModificationssoustype(?string $modificationssoustype): self
    {
        $this->modificationssoustype = $modificationssoustype;

        return $this;
    }

    public function getBonusforce(): ?int
    {
        return $this->bonusforce;
    }

    public function setBonusforce(int $bonusforce): self
    {
        $this->bonusforce = $bonusforce;

        return $this;
    }

    public function getBonusdexterite(): ?int
    {
        return $this->bonusdexterite;
    }

    public function setBonusdexterite(int $bonusdexterite): self
    {
        $this->bonusdexterite = $bonusdexterite;

        return $this;
    }

    public function getBonusconstitution(): ?int
    {
        return $this->bonusconstitution;
    }

    public function setBonusconstitution(int $bonusconstitution): self
    {
        $this->bonusconstitution = $bonusconstitution;

        return $this;
    }

    public function getBonusintelligence(): ?int
    {
        return $this->bonusintelligence;
    }

    public function setBonusintelligence(int $bonusintelligence): self
    {
        $this->bonusintelligence = $bonusintelligence;

        return $this;
    }

    public function getBonussagesse(): ?int
    {
        return $this->bonussagesse;
    }

    public function setBonussagesse(int $bonussagesse): self
    {
        $this->bonussagesse = $bonussagesse;

        return $this;
    }

    public function getBonuscharisme(): ?int
    {
        return $this->bonuscharisme;
    }

    public function setBonuscharisme(int $bonuscharisme): self
    {
        $this->bonuscharisme = $bonuscharisme;

        return $this;
    }

    public function getVitessedeplacement(): ?int
    {
        return $this->vitessedeplacement;
    }

    public function setVitessedeplacement(int $vitessedeplacement): self
    {
        $this->vitessedeplacement = $vitessedeplacement;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCapacites(): ?string
    {
        return $this->capacites;
    }

    public function setCapacites(?string $capacites): self
    {
        $this->capacites = $capacites;

        return $this;
    }

    public function getDesvie(): ?string
    {
        return $this->desvie;
    }

    public function setDesvie(?string $desvie): self
    {
        $this->desvie = $desvie;

        return $this;
    }

    public function getBonusdesvie(): ?string
    {
        return $this->bonusdesvie;
    }

    public function setBonusdesvie(?string $bonusdesvie): self
    {
        $this->bonusdesvie = $bonusdesvie;

        return $this;
    }

    public function getBonusbba(): ?int
    {
        return $this->bonusbba;
    }

    public function setBonusbba(int $bonusbba): self
    {
        $this->bonusbba = $bonusbba;

        return $this;
    }

    public function getBonuslutte(): ?int
    {
        return $this->bonuslutte;
    }

    public function setBonuslutte(?int $bonuslutte): self
    {
        $this->bonuslutte = $bonuslutte;

        return $this;
    }

    public function getBonusreflexe(): ?int
    {
        return $this->bonusreflexe;
    }

    public function setBonusreflexe(int $bonusreflexe): self
    {
        $this->bonusreflexe = $bonusreflexe;

        return $this;
    }

    public function getBonusvigueur(): ?int
    {
        return $this->bonusvigueur;
    }

    public function setBonusvigueur(int $bonusvigueur): self
    {
        $this->bonusvigueur = $bonusvigueur;

        return $this;
    }

    public function getBonusvolonte(): ?int
    {
        return $this->bonusvolonte;
    }

    public function setBonusvolonte(int $bonusvolonte): self
    {
        $this->bonusvolonte = $bonusvolonte;

        return $this;
    }

    public function getBonuscompetences(): ?string
    {
        return $this->bonuscompetences;
    }

    public function setBonuscompetences(?string $bonuscompetences): self
    {
        $this->bonuscompetences = $bonuscompetences;

        return $this;
    }

    public function getCompetencesraciales(): ?string
    {
        return $this->competencesraciales;
    }

    public function setCompetencesraciales(?string $competencesraciales): self
    {
        $this->competencesraciales = $competencesraciales;

        return $this;
    }

    public function getDonsraciaux(): ?string
    {
        return $this->donsraciaux;
    }

    public function setDonsraciaux(string $donsraciaux): self
    {
        $this->donsraciaux = $donsraciaux;

        return $this;
    }

    public function getDonsbonus(): ?string
    {
        return $this->donsbonus;
    }

    public function setDonsbonus(?string $donsbonus): self
    {
        $this->donsbonus = $donsbonus;

        return $this;
    }

    public function getArmurenaturelle(): ?int
    {
        return $this->armurenaturelle;
    }

    public function setArmurenaturelle(int $armurenaturelle): self
    {
        $this->armurenaturelle = $armurenaturelle;

        return $this;
    }

    public function getBonusca(): ?int
    {
        return $this->bonusca;
    }

    public function setBonusca(int $bonusca): self
    {
        $this->bonusca = $bonusca;

        return $this;
    }

    public function getBonusesquive(): ?int
    {
        return $this->bonusesquive;
    }

    public function setBonusesquive(int $bonusesquive): self
    {
        $this->bonusesquive = $bonusesquive;

        return $this;
    }

    public function getResistances(): ?string
    {
        return $this->resistances;
    }

    public function setResistances(?string $resistances): self
    {
        $this->resistances = $resistances;

        return $this;
    }

    public function getBonuscompetencesraciales(): ?string
    {
        return $this->bonuscompetencesraciales;
    }

    public function setBonuscompetencesraciales(?string $bonuscompetencesraciales): self
    {
        $this->bonuscompetencesraciales = $bonuscompetencesraciales;

        return $this;
    }

    public function getAttaques(): ?string
    {
        return $this->attaques;
    }

    public function setAttaques(?string $attaques): self
    {
        $this->attaques = $attaques;

        return $this;
    }

    public function getAttaquesspeciales(): ?string
    {
        return $this->attaquesspeciales;
    }

    public function setAttaquesspeciales(?string $attaquesspeciales): self
    {
        $this->attaquesspeciales = $attaquesspeciales;

        return $this;
    }

    public function getParticularites(): ?string
    {
        return $this->particularites;
    }

    public function setParticularites(?string $particularites): self
    {
        $this->particularites = $particularites;

        return $this;
    }

    public function getPouvoirs(): ?string
    {
        return $this->pouvoirs;
    }

    public function setPouvoirs(?string $pouvoirs): self
    {
        $this->pouvoirs = $pouvoirs;

        return $this;
    }

    public function getPouvoirsmagiques(): ?string
    {
        return $this->pouvoirsmagiques;
    }

    public function setPouvoirsmagiques(?string $pouvoirsmagiques): self
    {
        $this->pouvoirsmagiques = $pouvoirsmagiques;

        return $this;
    }

    public function getManiements(): ?string
    {
        return $this->maniements;
    }

    public function setManiements(?string $maniements): self
    {
        $this->maniements = $maniements;

        return $this;
    }

    public function getDegats(): ?string
    {
        return $this->degats;
    }

    public function setDegats(?string $degats): self
    {
        $this->degats = $degats;

        return $this;
    }

    public function getClasspredilection(): ?string
    {
        return $this->classpredilection;
    }

    public function setClasspredilection(?string $classpredilection): self
    {
        $this->classpredilection = $classpredilection;

        return $this;
    }

    public function getLangues(): ?string
    {
        return $this->langues;
    }

    public function setLangues(?string $langues): self
    {
        $this->langues = $langues;

        return $this;
    }

    public function getAjustementniveau(): ?int
    {
        return $this->ajustementniveau;
    }

    public function setAjustementniveau(int $ajustementniveau): self
    {
        $this->ajustementniveau = $ajustementniveau;

        return $this;
    }

    public function getFp(): ?string
    {
        return $this->fp;
    }

    public function setFp(?string $fp): self
    {
        $this->fp = $fp;

        return $this;
    }

    public function getAlignement(): ?string
    {
        return $this->alignement;
    }

    public function setAlignement(?string $alignement): self
    {
        $this->alignement = $alignement;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrerequis(): ?string
    {
        return $this->prerequis;
    }

    public function setPrerequis(?string $prerequis): self
    {
        $this->prerequis = $prerequis;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(?string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getOrganisationsociale(): ?string
    {
        return $this->organisationsociale;
    }

    public function setOrganisationsociale(?string $organisationsociale): self
    {
        $this->organisationsociale = $organisationsociale;

        return $this;
    }

    public function isBesoincreaturebase(): ?bool
    {
        return $this->besoincreaturebase;
    }

    public function setBesoincreaturebase(bool $besoincreaturebase): self
    {
        $this->besoincreaturebase = $besoincreaturebase;

        return $this;
    }

    public function isMortvivant(): ?bool
    {
        return $this->mortvivant;
    }

    public function setMortvivant(bool $mortvivant): self
    {
        $this->mortvivant = $mortvivant;

        return $this;
    }


}
