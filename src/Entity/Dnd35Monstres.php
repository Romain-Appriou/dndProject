<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstres
 *
 * @ORM\Table(name="dnd35_monstres")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresRepository")
 */
class Dnd35Monstres
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sousType", type="string", length=255, nullable=false)
     */
    private $soustype;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=3, nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="DV", type="string", length=255, nullable=false)
     */
    private $dv;

    /**
     * @var int
     *
     * @ORM\Column(name="vieMoyenne", type="integer", nullable=false)
     */
    private $viemoyenne;

    /**
     * @var int
     *
     * @ORM\Column(name="initiative", type="integer", nullable=false)
     */
    private $initiative;

    /**
     * @var float
     *
     * @ORM\Column(name="vitesse", type="float", precision=10, scale=0, nullable=false)
     */
    private $vitesse = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="nage", type="float", precision=10, scale=0, nullable=false)
     */
    private $nage = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="vol", type="float", precision=10, scale=0, nullable=false)
     */
    private $vol = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="escalade", type="float", precision=10, scale=0, nullable=true)
     */
    private $escalade = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="creusement", type="float", precision=10, scale=0, nullable=false)
     */
    private $creusement = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ca", type="integer", nullable=false)
     */
    private $ca;

    /**
     * @var int
     *
     * @ORM\Column(name="caContact", type="integer", nullable=false)
     */
    private $cacontact;

    /**
     * @var int
     *
     * @ORM\Column(name="caDepourvu", type="integer", nullable=false)
     */
    private $cadepourvu;

    /**
     * @var int
     *
     * @ORM\Column(name="caModifTaille", type="integer", nullable=false)
     */
    private $camodiftaille;

    /**
     * @var int
     *
     * @ORM\Column(name="caModifDex", type="integer", nullable=false)
     */
    private $camodifdex;

    /**
     * @var int
     *
     * @ORM\Column(name="caModifNaturelle", type="integer", nullable=false)
     */
    private $camodifnaturelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="caModifParade", type="integer", nullable=true)
     */
    private $camodifparade = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="caModifEsquive", type="integer", nullable=true)
     */
    private $camodifesquive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="armure", type="string", length=255, nullable=true)
     */
    private $armure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifArmure", type="integer", nullable=true)
     */
    private $modifarmure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bouclier", type="string", length=255, nullable=true)
     */
    private $bouclier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifBouclier", type="integer", nullable=true)
     */
    private $modifbouclier;

    /**
     * @var int
     *
     * @ORM\Column(name="attaqueBase", type="integer", nullable=false)
     */
    private $attaquebase;

    /**
     * @var string
     *
     * @ORM\Column(name="lutte", type="string", length=255, nullable=false, options={"default"="-"})
     */
    private $lutte = '-';

    /**
     * @var string
     *
     * @ORM\Column(name="attaque", type="string", length=255, nullable=false)
     */
    private $attaque;

    /**
     * @var string
     *
     * @ORM\Column(name="attaqueTouche", type="string", length=255, nullable=false)
     */
    private $attaquetouche;

    /**
     * @var string
     *
     * @ORM\Column(name="attaqueType", type="string", length=45, nullable=false, options={"default"="corps à corps"})
     */
    private $attaquetype = 'corps à corps';

    /**
     * @var string
     *
     * @ORM\Column(name="attaqueDegats", type="string", length=100, nullable=false)
     */
    private $attaquedegats;

    /**
     * @var string
     *
     * @ORM\Column(name="attaqueComplement", type="string", length=255, nullable=false)
     */
    private $attaquecomplement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaque2", type="string", length=255, nullable=true)
     */
    private $attaque2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueTouche2", type="string", length=255, nullable=true)
     */
    private $attaquetouche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueType2", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaquetype2 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueDegats2", type="string", length=45, nullable=true)
     */
    private $attaquedegats2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueComplement2", type="string", length=45, nullable=true)
     */
    private $attaquecomplement2;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOptionnelle2", type="boolean", nullable=false)
     */
    private $attaqueoptionnelle2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaque3", type="string", length=255, nullable=true)
     */
    private $attaque3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueTouche3", type="string", length=255, nullable=true)
     */
    private $attaquetouche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueType3", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaquetype3 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueDegats3", type="string", length=45, nullable=true)
     */
    private $attaquedegats3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueComplement3", type="string", length=45, nullable=true)
     */
    private $attaquecomplement3;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOptionnelle3", type="boolean", nullable=false)
     */
    private $attaqueoptionnelle3 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaque4", type="string", length=255, nullable=true)
     */
    private $attaque4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueTouche4", type="string", length=255, nullable=true)
     */
    private $attaquetouche4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueType4", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaquetype4 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueDegats4", type="string", length=45, nullable=true)
     */
    private $attaquedegats4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueComplement4", type="string", length=45, nullable=true)
     */
    private $attaquecomplement4;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOptionnelle4", type="boolean", nullable=false)
     */
    private $attaqueoptionnelle4 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaque5", type="string", length=255, nullable=true)
     */
    private $attaque5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueTouche5", type="string", length=255, nullable=true)
     */
    private $attaquetouche5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueType5", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaquetype5 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueDegats5", type="string", length=45, nullable=true)
     */
    private $attaquedegats5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueComplement5", type="string", length=45, nullable=true)
     */
    private $attaquecomplement5;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOptionnelle5", type="boolean", nullable=false)
     */
    private $attaqueoptionnelle5 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaque6", type="string", length=255, nullable=true)
     */
    private $attaque6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueTouche6", type="string", length=255, nullable=true)
     */
    private $attaquetouche6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueType6", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaquetype6 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueDegats6", type="string", length=45, nullable=true)
     */
    private $attaquedegats6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueComplement6", type="string", length=45, nullable=true)
     */
    private $attaquecomplement6;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOptionnelle6", type="boolean", nullable=false)
     */
    private $attaqueoptionnelle6 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche;

    /**
     * @var string
     *
     * @ORM\Column(name="attaqueOutranceType", type="string", length=45, nullable=false, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats", type="string", length=100, nullable=true)
     */
    private $attaqueoutrancedegats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancecomplement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance2", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche2", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceType2", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype2 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats2", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancedegats2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement2", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancecomplement2;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOutranceOptionnelle2", type="boolean", nullable=false)
     */
    private $attaqueoutranceoptionnelle2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance3", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche3", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceType3", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype3 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats3", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancedegats3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement3", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancecomplement3;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOutranceOptionnelle3", type="boolean", nullable=false)
     */
    private $attaqueoutranceoptionnelle3 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance4", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche4", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceType4", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype4 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats4", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancedegats4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement4", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancecomplement4;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOutranceOptionnelle4", type="boolean", nullable=false)
     */
    private $attaqueoutranceoptionnelle4 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance5", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche5", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceType5", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype5 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats5", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancedegats5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement5", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancecomplement5;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOutranceOptionnelle5", type="boolean", nullable=false)
     */
    private $attaqueoutranceoptionnelle5 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutrance6", type="string", length=255, nullable=true)
     */
    private $attaqueoutrance6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceTouche6", type="string", length=255, nullable=true)
     */
    private $attaqueoutrancetouche6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceType6", type="string", length=45, nullable=true, options={"default"="corps à corps"})
     */
    private $attaqueoutrancetype6 = 'corps à corps';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceDegats6", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancedegats6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attaqueOutranceComplement6", type="string", length=45, nullable=true)
     */
    private $attaqueoutrancecomplement6;

    /**
     * @var bool
     *
     * @ORM\Column(name="attaqueOutranceOptionnelle6", type="boolean", nullable=false)
     */
    private $attaqueoutranceoptionnelle6 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="souffle", type="string", length=255, nullable=true)
     */
    private $souffle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ddSouffle", type="integer", nullable=true)
     */
    private $ddsouffle;

    /**
     * @var float
     *
     * @ORM\Column(name="espaceOccupe", type="float", precision=10, scale=0, nullable=false)
     */
    private $espaceoccupe;

    /**
     * @var float
     *
     * @ORM\Column(name="allonge", type="float", precision=10, scale=0, nullable=false)
     */
    private $allonge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allongeComplement", type="string", length=255, nullable=true)
     */
    private $allongecomplement;

    /**
     * @var string
     *
     * @ORM\Column(name="attaquesSpeciales", type="string", length=255, nullable=false)
     */
    private $attaquesspeciales;

    /**
     * @var string
     *
     * @ORM\Column(name="particularites", type="text", length=65535, nullable=false)
     */
    private $particularites;

    /**
     * @var int
     *
     * @ORM\Column(name="reflexe", type="integer", nullable=false)
     */
    private $reflexe;

    /**
     * @var int
     *
     * @ORM\Column(name="vigueur", type="integer", nullable=false)
     */
    private $vigueur;

    /**
     * @var int
     *
     * @ORM\Column(name="volonte", type="integer", nullable=false)
     */
    private $volonte;

    /**
     * @var string
     *
     * @ORM\Column(name="vigueurPoison", type="string", length=255, nullable=false, options={"default"="-"})
     */
    private $vigueurpoison = '-';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ddPresenceTerrifiante", type="integer", nullable=true)
     */
    private $ddpresenceterrifiante;

    /**
     * @var string
     *
     * @ORM\Column(name="force", type="string", length=255, nullable=false, options={"default"="-"})
     */
    private $force = '-';

    /**
     * @var int
     *
     * @ORM\Column(name="dexterite", type="integer", nullable=false)
     */
    private $dexterite;

    /**
     * @var string
     *
     * @ORM\Column(name="constitution", type="string", length=255, nullable=false, options={"default"="-"})
     */
    private $constitution = '-';

    /**
     * @var string
     *
     * @ORM\Column(name="intelligence", type="string", length=255, nullable=false)
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(name="sagesse", type="integer", nullable=false)
     */
    private $sagesse;

    /**
     * @var int
     *
     * @ORM\Column(name="charisme", type="integer", nullable=false)
     */
    private $charisme;

    /**
     * @var string
     *
     * @ORM\Column(name="competences", type="text", length=65535, nullable=false)
     */
    private $competences;

    /**
     * @var string
     *
     * @ORM\Column(name="dons", type="text", length=65535, nullable=false)
     */
    private $dons;

    /**
     * @var int|null
     *
     * @ORM\Column(name="niveauLanceurSorts", type="integer", nullable=true)
     */
    private $niveaulanceursorts;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rm", type="integer", nullable=true)
     */
    private $rm;

    /**
     * @var string
     *
     * @ORM\Column(name="environnement", type="string", length=255, nullable=false)
     */
    private $environnement;

    /**
     * @var string
     *
     * @ORM\Column(name="organisation", type="string", length=500, nullable=false)
     */
    private $organisation;

    /**
     * @var float
     *
     * @ORM\Column(name="fp", type="float", precision=10, scale=0, nullable=false)
     */
    private $fp;

    /**
     * @var string
     *
     * @ORM\Column(name="tresor", type="string", length=255, nullable=false)
     */
    private $tresor;

    /**
     * @var string
     *
     * @ORM\Column(name="alignement", type="string", length=255, nullable=false)
     */
    private $alignement;

    /**
     * @var string
     *
     * @ORM\Column(name="evolutions", type="string", length=255, nullable=false)
     */
    private $evolutions;

    /**
     * @var string
     *
     * @ORM\Column(name="ajustement", type="string", length=255, nullable=false, options={"default"="-"})
     */
    private $ajustement = '-';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="combat", type="text", length=65535, nullable=false)
     */
    private $combat;

    /**
     * @var bool
     *
     * @ORM\Column(name="jouable", type="boolean", nullable=false)
     */
    private $jouable = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="squelette", type="integer", nullable=false, options={"default"="1"})
     */
    private $squelette = 1;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSoustype(): ?string
    {
        return $this->soustype;
    }

    public function setSoustype(string $soustype): self
    {
        $this->soustype = $soustype;

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

    public function getDv(): ?string
    {
        return $this->dv;
    }

    public function setDv(string $dv): self
    {
        $this->dv = $dv;

        return $this;
    }

    public function getViemoyenne(): ?int
    {
        return $this->viemoyenne;
    }

    public function setViemoyenne(int $viemoyenne): self
    {
        $this->viemoyenne = $viemoyenne;

        return $this;
    }

    public function getInitiative(): ?int
    {
        return $this->initiative;
    }

    public function setInitiative(int $initiative): self
    {
        $this->initiative = $initiative;

        return $this;
    }

    public function getVitesse(): ?float
    {
        return $this->vitesse;
    }

    public function setVitesse(float $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getNage(): ?float
    {
        return $this->nage;
    }

    public function setNage(float $nage): self
    {
        $this->nage = $nage;

        return $this;
    }

    public function getVol(): ?float
    {
        return $this->vol;
    }

    public function setVol(float $vol): self
    {
        $this->vol = $vol;

        return $this;
    }

    public function getEscalade(): ?float
    {
        return $this->escalade;
    }

    public function setEscalade(?float $escalade): self
    {
        $this->escalade = $escalade;

        return $this;
    }

    public function getCreusement(): ?float
    {
        return $this->creusement;
    }

    public function setCreusement(float $creusement): self
    {
        $this->creusement = $creusement;

        return $this;
    }

    public function getCa(): ?int
    {
        return $this->ca;
    }

    public function setCa(int $ca): self
    {
        $this->ca = $ca;

        return $this;
    }

    public function getCacontact(): ?int
    {
        return $this->cacontact;
    }

    public function setCacontact(int $cacontact): self
    {
        $this->cacontact = $cacontact;

        return $this;
    }

    public function getCadepourvu(): ?int
    {
        return $this->cadepourvu;
    }

    public function setCadepourvu(int $cadepourvu): self
    {
        $this->cadepourvu = $cadepourvu;

        return $this;
    }

    public function getCamodiftaille(): ?int
    {
        return $this->camodiftaille;
    }

    public function setCamodiftaille(int $camodiftaille): self
    {
        $this->camodiftaille = $camodiftaille;

        return $this;
    }

    public function getCamodifdex(): ?int
    {
        return $this->camodifdex;
    }

    public function setCamodifdex(int $camodifdex): self
    {
        $this->camodifdex = $camodifdex;

        return $this;
    }

    public function getCamodifnaturelle(): ?int
    {
        return $this->camodifnaturelle;
    }

    public function setCamodifnaturelle(int $camodifnaturelle): self
    {
        $this->camodifnaturelle = $camodifnaturelle;

        return $this;
    }

    public function getCamodifparade(): ?int
    {
        return $this->camodifparade;
    }

    public function setCamodifparade(?int $camodifparade): self
    {
        $this->camodifparade = $camodifparade;

        return $this;
    }

    public function getCamodifesquive(): ?int
    {
        return $this->camodifesquive;
    }

    public function setCamodifesquive(?int $camodifesquive): self
    {
        $this->camodifesquive = $camodifesquive;

        return $this;
    }

    public function getArmure(): ?string
    {
        return $this->armure;
    }

    public function setArmure(?string $armure): self
    {
        $this->armure = $armure;

        return $this;
    }

    public function getModifarmure(): ?int
    {
        return $this->modifarmure;
    }

    public function setModifarmure(?int $modifarmure): self
    {
        $this->modifarmure = $modifarmure;

        return $this;
    }

    public function getBouclier(): ?string
    {
        return $this->bouclier;
    }

    public function setBouclier(?string $bouclier): self
    {
        $this->bouclier = $bouclier;

        return $this;
    }

    public function getModifbouclier(): ?int
    {
        return $this->modifbouclier;
    }

    public function setModifbouclier(?int $modifbouclier): self
    {
        $this->modifbouclier = $modifbouclier;

        return $this;
    }

    public function getAttaquebase(): ?int
    {
        return $this->attaquebase;
    }

    public function setAttaquebase(int $attaquebase): self
    {
        $this->attaquebase = $attaquebase;

        return $this;
    }

    public function getLutte(): ?string
    {
        return $this->lutte;
    }

    public function setLutte(string $lutte): self
    {
        $this->lutte = $lutte;

        return $this;
    }

    public function getAttaque(): ?string
    {
        return $this->attaque;
    }

    public function setAttaque(string $attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }

    public function getAttaquetouche(): ?string
    {
        return $this->attaquetouche;
    }

    public function setAttaquetouche(string $attaquetouche): self
    {
        $this->attaquetouche = $attaquetouche;

        return $this;
    }

    public function getAttaquetype(): ?string
    {
        return $this->attaquetype;
    }

    public function setAttaquetype(string $attaquetype): self
    {
        $this->attaquetype = $attaquetype;

        return $this;
    }

    public function getAttaquedegats(): ?string
    {
        return $this->attaquedegats;
    }

    public function setAttaquedegats(string $attaquedegats): self
    {
        $this->attaquedegats = $attaquedegats;

        return $this;
    }

    public function getAttaquecomplement(): ?string
    {
        return $this->attaquecomplement;
    }

    public function setAttaquecomplement(string $attaquecomplement): self
    {
        $this->attaquecomplement = $attaquecomplement;

        return $this;
    }

    public function getAttaque2(): ?string
    {
        return $this->attaque2;
    }

    public function setAttaque2(?string $attaque2): self
    {
        $this->attaque2 = $attaque2;

        return $this;
    }

    public function getAttaquetouche2(): ?string
    {
        return $this->attaquetouche2;
    }

    public function setAttaquetouche2(?string $attaquetouche2): self
    {
        $this->attaquetouche2 = $attaquetouche2;

        return $this;
    }

    public function getAttaquetype2(): ?string
    {
        return $this->attaquetype2;
    }

    public function setAttaquetype2(?string $attaquetype2): self
    {
        $this->attaquetype2 = $attaquetype2;

        return $this;
    }

    public function getAttaquedegats2(): ?string
    {
        return $this->attaquedegats2;
    }

    public function setAttaquedegats2(?string $attaquedegats2): self
    {
        $this->attaquedegats2 = $attaquedegats2;

        return $this;
    }

    public function getAttaquecomplement2(): ?string
    {
        return $this->attaquecomplement2;
    }

    public function setAttaquecomplement2(?string $attaquecomplement2): self
    {
        $this->attaquecomplement2 = $attaquecomplement2;

        return $this;
    }

    public function isAttaqueoptionnelle2(): ?bool
    {
        return $this->attaqueoptionnelle2;
    }

    public function setAttaqueoptionnelle2(bool $attaqueoptionnelle2): self
    {
        $this->attaqueoptionnelle2 = $attaqueoptionnelle2;

        return $this;
    }

    public function getAttaque3(): ?string
    {
        return $this->attaque3;
    }

    public function setAttaque3(?string $attaque3): self
    {
        $this->attaque3 = $attaque3;

        return $this;
    }

    public function getAttaquetouche3(): ?string
    {
        return $this->attaquetouche3;
    }

    public function setAttaquetouche3(?string $attaquetouche3): self
    {
        $this->attaquetouche3 = $attaquetouche3;

        return $this;
    }

    public function getAttaquetype3(): ?string
    {
        return $this->attaquetype3;
    }

    public function setAttaquetype3(?string $attaquetype3): self
    {
        $this->attaquetype3 = $attaquetype3;

        return $this;
    }

    public function getAttaquedegats3(): ?string
    {
        return $this->attaquedegats3;
    }

    public function setAttaquedegats3(?string $attaquedegats3): self
    {
        $this->attaquedegats3 = $attaquedegats3;

        return $this;
    }

    public function getAttaquecomplement3(): ?string
    {
        return $this->attaquecomplement3;
    }

    public function setAttaquecomplement3(?string $attaquecomplement3): self
    {
        $this->attaquecomplement3 = $attaquecomplement3;

        return $this;
    }

    public function isAttaqueoptionnelle3(): ?bool
    {
        return $this->attaqueoptionnelle3;
    }

    public function setAttaqueoptionnelle3(bool $attaqueoptionnelle3): self
    {
        $this->attaqueoptionnelle3 = $attaqueoptionnelle3;

        return $this;
    }

    public function getAttaque4(): ?string
    {
        return $this->attaque4;
    }

    public function setAttaque4(?string $attaque4): self
    {
        $this->attaque4 = $attaque4;

        return $this;
    }

    public function getAttaquetouche4(): ?string
    {
        return $this->attaquetouche4;
    }

    public function setAttaquetouche4(?string $attaquetouche4): self
    {
        $this->attaquetouche4 = $attaquetouche4;

        return $this;
    }

    public function getAttaquetype4(): ?string
    {
        return $this->attaquetype4;
    }

    public function setAttaquetype4(?string $attaquetype4): self
    {
        $this->attaquetype4 = $attaquetype4;

        return $this;
    }

    public function getAttaquedegats4(): ?string
    {
        return $this->attaquedegats4;
    }

    public function setAttaquedegats4(?string $attaquedegats4): self
    {
        $this->attaquedegats4 = $attaquedegats4;

        return $this;
    }

    public function getAttaquecomplement4(): ?string
    {
        return $this->attaquecomplement4;
    }

    public function setAttaquecomplement4(?string $attaquecomplement4): self
    {
        $this->attaquecomplement4 = $attaquecomplement4;

        return $this;
    }

    public function isAttaqueoptionnelle4(): ?bool
    {
        return $this->attaqueoptionnelle4;
    }

    public function setAttaqueoptionnelle4(bool $attaqueoptionnelle4): self
    {
        $this->attaqueoptionnelle4 = $attaqueoptionnelle4;

        return $this;
    }

    public function getAttaque5(): ?string
    {
        return $this->attaque5;
    }

    public function setAttaque5(?string $attaque5): self
    {
        $this->attaque5 = $attaque5;

        return $this;
    }

    public function getAttaquetouche5(): ?string
    {
        return $this->attaquetouche5;
    }

    public function setAttaquetouche5(?string $attaquetouche5): self
    {
        $this->attaquetouche5 = $attaquetouche5;

        return $this;
    }

    public function getAttaquetype5(): ?string
    {
        return $this->attaquetype5;
    }

    public function setAttaquetype5(?string $attaquetype5): self
    {
        $this->attaquetype5 = $attaquetype5;

        return $this;
    }

    public function getAttaquedegats5(): ?string
    {
        return $this->attaquedegats5;
    }

    public function setAttaquedegats5(?string $attaquedegats5): self
    {
        $this->attaquedegats5 = $attaquedegats5;

        return $this;
    }

    public function getAttaquecomplement5(): ?string
    {
        return $this->attaquecomplement5;
    }

    public function setAttaquecomplement5(?string $attaquecomplement5): self
    {
        $this->attaquecomplement5 = $attaquecomplement5;

        return $this;
    }

    public function isAttaqueoptionnelle5(): ?bool
    {
        return $this->attaqueoptionnelle5;
    }

    public function setAttaqueoptionnelle5(bool $attaqueoptionnelle5): self
    {
        $this->attaqueoptionnelle5 = $attaqueoptionnelle5;

        return $this;
    }

    public function getAttaque6(): ?string
    {
        return $this->attaque6;
    }

    public function setAttaque6(?string $attaque6): self
    {
        $this->attaque6 = $attaque6;

        return $this;
    }

    public function getAttaquetouche6(): ?string
    {
        return $this->attaquetouche6;
    }

    public function setAttaquetouche6(?string $attaquetouche6): self
    {
        $this->attaquetouche6 = $attaquetouche6;

        return $this;
    }

    public function getAttaquetype6(): ?string
    {
        return $this->attaquetype6;
    }

    public function setAttaquetype6(?string $attaquetype6): self
    {
        $this->attaquetype6 = $attaquetype6;

        return $this;
    }

    public function getAttaquedegats6(): ?string
    {
        return $this->attaquedegats6;
    }

    public function setAttaquedegats6(?string $attaquedegats6): self
    {
        $this->attaquedegats6 = $attaquedegats6;

        return $this;
    }

    public function getAttaquecomplement6(): ?string
    {
        return $this->attaquecomplement6;
    }

    public function setAttaquecomplement6(?string $attaquecomplement6): self
    {
        $this->attaquecomplement6 = $attaquecomplement6;

        return $this;
    }

    public function isAttaqueoptionnelle6(): ?bool
    {
        return $this->attaqueoptionnelle6;
    }

    public function setAttaqueoptionnelle6(bool $attaqueoptionnelle6): self
    {
        $this->attaqueoptionnelle6 = $attaqueoptionnelle6;

        return $this;
    }

    public function getAttaqueoutrance(): ?string
    {
        return $this->attaqueoutrance;
    }

    public function setAttaqueoutrance(?string $attaqueoutrance): self
    {
        $this->attaqueoutrance = $attaqueoutrance;

        return $this;
    }

    public function getAttaqueoutrancetouche(): ?string
    {
        return $this->attaqueoutrancetouche;
    }

    public function setAttaqueoutrancetouche(?string $attaqueoutrancetouche): self
    {
        $this->attaqueoutrancetouche = $attaqueoutrancetouche;

        return $this;
    }

    public function getAttaqueoutrancetype(): ?string
    {
        return $this->attaqueoutrancetype;
    }

    public function setAttaqueoutrancetype(string $attaqueoutrancetype): self
    {
        $this->attaqueoutrancetype = $attaqueoutrancetype;

        return $this;
    }

    public function getAttaqueoutrancedegats(): ?string
    {
        return $this->attaqueoutrancedegats;
    }

    public function setAttaqueoutrancedegats(?string $attaqueoutrancedegats): self
    {
        $this->attaqueoutrancedegats = $attaqueoutrancedegats;

        return $this;
    }

    public function getAttaqueoutrancecomplement(): ?string
    {
        return $this->attaqueoutrancecomplement;
    }

    public function setAttaqueoutrancecomplement(?string $attaqueoutrancecomplement): self
    {
        $this->attaqueoutrancecomplement = $attaqueoutrancecomplement;

        return $this;
    }

    public function getAttaqueoutrance2(): ?string
    {
        return $this->attaqueoutrance2;
    }

    public function setAttaqueoutrance2(?string $attaqueoutrance2): self
    {
        $this->attaqueoutrance2 = $attaqueoutrance2;

        return $this;
    }

    public function getAttaqueoutrancetouche2(): ?string
    {
        return $this->attaqueoutrancetouche2;
    }

    public function setAttaqueoutrancetouche2(?string $attaqueoutrancetouche2): self
    {
        $this->attaqueoutrancetouche2 = $attaqueoutrancetouche2;

        return $this;
    }

    public function getAttaqueoutrancetype2(): ?string
    {
        return $this->attaqueoutrancetype2;
    }

    public function setAttaqueoutrancetype2(?string $attaqueoutrancetype2): self
    {
        $this->attaqueoutrancetype2 = $attaqueoutrancetype2;

        return $this;
    }

    public function getAttaqueoutrancedegats2(): ?string
    {
        return $this->attaqueoutrancedegats2;
    }

    public function setAttaqueoutrancedegats2(?string $attaqueoutrancedegats2): self
    {
        $this->attaqueoutrancedegats2 = $attaqueoutrancedegats2;

        return $this;
    }

    public function getAttaqueoutrancecomplement2(): ?string
    {
        return $this->attaqueoutrancecomplement2;
    }

    public function setAttaqueoutrancecomplement2(?string $attaqueoutrancecomplement2): self
    {
        $this->attaqueoutrancecomplement2 = $attaqueoutrancecomplement2;

        return $this;
    }

    public function isAttaqueoutranceoptionnelle2(): ?bool
    {
        return $this->attaqueoutranceoptionnelle2;
    }

    public function setAttaqueoutranceoptionnelle2(bool $attaqueoutranceoptionnelle2): self
    {
        $this->attaqueoutranceoptionnelle2 = $attaqueoutranceoptionnelle2;

        return $this;
    }

    public function getAttaqueoutrance3(): ?string
    {
        return $this->attaqueoutrance3;
    }

    public function setAttaqueoutrance3(?string $attaqueoutrance3): self
    {
        $this->attaqueoutrance3 = $attaqueoutrance3;

        return $this;
    }

    public function getAttaqueoutrancetouche3(): ?string
    {
        return $this->attaqueoutrancetouche3;
    }

    public function setAttaqueoutrancetouche3(?string $attaqueoutrancetouche3): self
    {
        $this->attaqueoutrancetouche3 = $attaqueoutrancetouche3;

        return $this;
    }

    public function getAttaqueoutrancetype3(): ?string
    {
        return $this->attaqueoutrancetype3;
    }

    public function setAttaqueoutrancetype3(?string $attaqueoutrancetype3): self
    {
        $this->attaqueoutrancetype3 = $attaqueoutrancetype3;

        return $this;
    }

    public function getAttaqueoutrancedegats3(): ?string
    {
        return $this->attaqueoutrancedegats3;
    }

    public function setAttaqueoutrancedegats3(?string $attaqueoutrancedegats3): self
    {
        $this->attaqueoutrancedegats3 = $attaqueoutrancedegats3;

        return $this;
    }

    public function getAttaqueoutrancecomplement3(): ?string
    {
        return $this->attaqueoutrancecomplement3;
    }

    public function setAttaqueoutrancecomplement3(?string $attaqueoutrancecomplement3): self
    {
        $this->attaqueoutrancecomplement3 = $attaqueoutrancecomplement3;

        return $this;
    }

    public function isAttaqueoutranceoptionnelle3(): ?bool
    {
        return $this->attaqueoutranceoptionnelle3;
    }

    public function setAttaqueoutranceoptionnelle3(bool $attaqueoutranceoptionnelle3): self
    {
        $this->attaqueoutranceoptionnelle3 = $attaqueoutranceoptionnelle3;

        return $this;
    }

    public function getAttaqueoutrance4(): ?string
    {
        return $this->attaqueoutrance4;
    }

    public function setAttaqueoutrance4(?string $attaqueoutrance4): self
    {
        $this->attaqueoutrance4 = $attaqueoutrance4;

        return $this;
    }

    public function getAttaqueoutrancetouche4(): ?string
    {
        return $this->attaqueoutrancetouche4;
    }

    public function setAttaqueoutrancetouche4(?string $attaqueoutrancetouche4): self
    {
        $this->attaqueoutrancetouche4 = $attaqueoutrancetouche4;

        return $this;
    }

    public function getAttaqueoutrancetype4(): ?string
    {
        return $this->attaqueoutrancetype4;
    }

    public function setAttaqueoutrancetype4(?string $attaqueoutrancetype4): self
    {
        $this->attaqueoutrancetype4 = $attaqueoutrancetype4;

        return $this;
    }

    public function getAttaqueoutrancedegats4(): ?string
    {
        return $this->attaqueoutrancedegats4;
    }

    public function setAttaqueoutrancedegats4(?string $attaqueoutrancedegats4): self
    {
        $this->attaqueoutrancedegats4 = $attaqueoutrancedegats4;

        return $this;
    }

    public function getAttaqueoutrancecomplement4(): ?string
    {
        return $this->attaqueoutrancecomplement4;
    }

    public function setAttaqueoutrancecomplement4(?string $attaqueoutrancecomplement4): self
    {
        $this->attaqueoutrancecomplement4 = $attaqueoutrancecomplement4;

        return $this;
    }

    public function isAttaqueoutranceoptionnelle4(): ?bool
    {
        return $this->attaqueoutranceoptionnelle4;
    }

    public function setAttaqueoutranceoptionnelle4(bool $attaqueoutranceoptionnelle4): self
    {
        $this->attaqueoutranceoptionnelle4 = $attaqueoutranceoptionnelle4;

        return $this;
    }

    public function getAttaqueoutrance5(): ?string
    {
        return $this->attaqueoutrance5;
    }

    public function setAttaqueoutrance5(?string $attaqueoutrance5): self
    {
        $this->attaqueoutrance5 = $attaqueoutrance5;

        return $this;
    }

    public function getAttaqueoutrancetouche5(): ?string
    {
        return $this->attaqueoutrancetouche5;
    }

    public function setAttaqueoutrancetouche5(?string $attaqueoutrancetouche5): self
    {
        $this->attaqueoutrancetouche5 = $attaqueoutrancetouche5;

        return $this;
    }

    public function getAttaqueoutrancetype5(): ?string
    {
        return $this->attaqueoutrancetype5;
    }

    public function setAttaqueoutrancetype5(?string $attaqueoutrancetype5): self
    {
        $this->attaqueoutrancetype5 = $attaqueoutrancetype5;

        return $this;
    }

    public function getAttaqueoutrancedegats5(): ?string
    {
        return $this->attaqueoutrancedegats5;
    }

    public function setAttaqueoutrancedegats5(?string $attaqueoutrancedegats5): self
    {
        $this->attaqueoutrancedegats5 = $attaqueoutrancedegats5;

        return $this;
    }

    public function getAttaqueoutrancecomplement5(): ?string
    {
        return $this->attaqueoutrancecomplement5;
    }

    public function setAttaqueoutrancecomplement5(?string $attaqueoutrancecomplement5): self
    {
        $this->attaqueoutrancecomplement5 = $attaqueoutrancecomplement5;

        return $this;
    }

    public function isAttaqueoutranceoptionnelle5(): ?bool
    {
        return $this->attaqueoutranceoptionnelle5;
    }

    public function setAttaqueoutranceoptionnelle5(bool $attaqueoutranceoptionnelle5): self
    {
        $this->attaqueoutranceoptionnelle5 = $attaqueoutranceoptionnelle5;

        return $this;
    }

    public function getAttaqueoutrance6(): ?string
    {
        return $this->attaqueoutrance6;
    }

    public function setAttaqueoutrance6(?string $attaqueoutrance6): self
    {
        $this->attaqueoutrance6 = $attaqueoutrance6;

        return $this;
    }

    public function getAttaqueoutrancetouche6(): ?string
    {
        return $this->attaqueoutrancetouche6;
    }

    public function setAttaqueoutrancetouche6(?string $attaqueoutrancetouche6): self
    {
        $this->attaqueoutrancetouche6 = $attaqueoutrancetouche6;

        return $this;
    }

    public function getAttaqueoutrancetype6(): ?string
    {
        return $this->attaqueoutrancetype6;
    }

    public function setAttaqueoutrancetype6(?string $attaqueoutrancetype6): self
    {
        $this->attaqueoutrancetype6 = $attaqueoutrancetype6;

        return $this;
    }

    public function getAttaqueoutrancedegats6(): ?string
    {
        return $this->attaqueoutrancedegats6;
    }

    public function setAttaqueoutrancedegats6(?string $attaqueoutrancedegats6): self
    {
        $this->attaqueoutrancedegats6 = $attaqueoutrancedegats6;

        return $this;
    }

    public function getAttaqueoutrancecomplement6(): ?string
    {
        return $this->attaqueoutrancecomplement6;
    }

    public function setAttaqueoutrancecomplement6(?string $attaqueoutrancecomplement6): self
    {
        $this->attaqueoutrancecomplement6 = $attaqueoutrancecomplement6;

        return $this;
    }

    public function isAttaqueoutranceoptionnelle6(): ?bool
    {
        return $this->attaqueoutranceoptionnelle6;
    }

    public function setAttaqueoutranceoptionnelle6(bool $attaqueoutranceoptionnelle6): self
    {
        $this->attaqueoutranceoptionnelle6 = $attaqueoutranceoptionnelle6;

        return $this;
    }

    public function getSouffle(): ?string
    {
        return $this->souffle;
    }

    public function setSouffle(?string $souffle): self
    {
        $this->souffle = $souffle;

        return $this;
    }

    public function getDdsouffle(): ?int
    {
        return $this->ddsouffle;
    }

    public function setDdsouffle(?int $ddsouffle): self
    {
        $this->ddsouffle = $ddsouffle;

        return $this;
    }

    public function getEspaceoccupe(): ?float
    {
        return $this->espaceoccupe;
    }

    public function setEspaceoccupe(float $espaceoccupe): self
    {
        $this->espaceoccupe = $espaceoccupe;

        return $this;
    }

    public function getAllonge(): ?float
    {
        return $this->allonge;
    }

    public function setAllonge(float $allonge): self
    {
        $this->allonge = $allonge;

        return $this;
    }

    public function getAllongecomplement(): ?string
    {
        return $this->allongecomplement;
    }

    public function setAllongecomplement(?string $allongecomplement): self
    {
        $this->allongecomplement = $allongecomplement;

        return $this;
    }

    public function getAttaquesspeciales(): ?string
    {
        return $this->attaquesspeciales;
    }

    public function setAttaquesspeciales(string $attaquesspeciales): self
    {
        $this->attaquesspeciales = $attaquesspeciales;

        return $this;
    }

    public function getParticularites(): ?string
    {
        return $this->particularites;
    }

    public function setParticularites(string $particularites): self
    {
        $this->particularites = $particularites;

        return $this;
    }

    public function getReflexe(): ?int
    {
        return $this->reflexe;
    }

    public function setReflexe(int $reflexe): self
    {
        $this->reflexe = $reflexe;

        return $this;
    }

    public function getVigueur(): ?int
    {
        return $this->vigueur;
    }

    public function setVigueur(int $vigueur): self
    {
        $this->vigueur = $vigueur;

        return $this;
    }

    public function getVolonte(): ?int
    {
        return $this->volonte;
    }

    public function setVolonte(int $volonte): self
    {
        $this->volonte = $volonte;

        return $this;
    }

    public function getVigueurpoison(): ?string
    {
        return $this->vigueurpoison;
    }

    public function setVigueurpoison(string $vigueurpoison): self
    {
        $this->vigueurpoison = $vigueurpoison;

        return $this;
    }

    public function getDdpresenceterrifiante(): ?int
    {
        return $this->ddpresenceterrifiante;
    }

    public function setDdpresenceterrifiante(?int $ddpresenceterrifiante): self
    {
        $this->ddpresenceterrifiante = $ddpresenceterrifiante;

        return $this;
    }

    public function getForce(): ?string
    {
        return $this->force;
    }

    public function setForce(string $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function getDexterite(): ?int
    {
        return $this->dexterite;
    }

    public function setDexterite(int $dexterite): self
    {
        $this->dexterite = $dexterite;

        return $this;
    }

    public function getConstitution(): ?string
    {
        return $this->constitution;
    }

    public function setConstitution(string $constitution): self
    {
        $this->constitution = $constitution;

        return $this;
    }

    public function getIntelligence(): ?string
    {
        return $this->intelligence;
    }

    public function setIntelligence(string $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getSagesse(): ?int
    {
        return $this->sagesse;
    }

    public function setSagesse(int $sagesse): self
    {
        $this->sagesse = $sagesse;

        return $this;
    }

    public function getCharisme(): ?int
    {
        return $this->charisme;
    }

    public function setCharisme(int $charisme): self
    {
        $this->charisme = $charisme;

        return $this;
    }

    public function getCompetences(): ?string
    {
        return $this->competences;
    }

    public function setCompetences(string $competences): self
    {
        $this->competences = $competences;

        return $this;
    }

    public function getDons(): ?string
    {
        return $this->dons;
    }

    public function setDons(string $dons): self
    {
        $this->dons = $dons;

        return $this;
    }

    public function getNiveaulanceursorts(): ?int
    {
        return $this->niveaulanceursorts;
    }

    public function setNiveaulanceursorts(?int $niveaulanceursorts): self
    {
        $this->niveaulanceursorts = $niveaulanceursorts;

        return $this;
    }

    public function getRm(): ?int
    {
        return $this->rm;
    }

    public function setRm(?int $rm): self
    {
        $this->rm = $rm;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getOrganisation(): ?string
    {
        return $this->organisation;
    }

    public function setOrganisation(string $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getFp(): ?float
    {
        return $this->fp;
    }

    public function setFp(float $fp): self
    {
        $this->fp = $fp;

        return $this;
    }

    public function getTresor(): ?string
    {
        return $this->tresor;
    }

    public function setTresor(string $tresor): self
    {
        $this->tresor = $tresor;

        return $this;
    }

    public function getAlignement(): ?string
    {
        return $this->alignement;
    }

    public function setAlignement(string $alignement): self
    {
        $this->alignement = $alignement;

        return $this;
    }

    public function getEvolutions(): ?string
    {
        return $this->evolutions;
    }

    public function setEvolutions(string $evolutions): self
    {
        $this->evolutions = $evolutions;

        return $this;
    }

    public function getAjustement(): ?string
    {
        return $this->ajustement;
    }

    public function setAjustement(string $ajustement): self
    {
        $this->ajustement = $ajustement;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCombat(): ?string
    {
        return $this->combat;
    }

    public function setCombat(string $combat): self
    {
        $this->combat = $combat;

        return $this;
    }

    public function isJouable(): ?bool
    {
        return $this->jouable;
    }

    public function setJouable(bool $jouable): self
    {
        $this->jouable = $jouable;

        return $this;
    }

    public function getSquelette(): ?int
    {
        return $this->squelette;
    }

    public function setSquelette(int $squelette): self
    {
        $this->squelette = $squelette;

        return $this;
    }


}
