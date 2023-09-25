<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Races
 *
 * @ORM\Table(name="dnd35_races")
 * @ORM\Entity(repositoryClass="App\Repository\RacesRepository")
 */
class Dnd35Races
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=3, nullable=false)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer", nullable=false)
     */
    private $vitesse;

    /**
     * @var int
     *
     * @ORM\Column(name="donsSuppLvl1", type="integer", nullable=false)
     */
    private $donssupplvl1;

    /**
     * @var int
     *
     * @ORM\Column(name="compSuppLvl1", type="integer", nullable=false)
     */
    private $compsupplvl1;

    /**
     * @var int
     *
     * @ORM\Column(name="compSuppByLvl", type="integer", nullable=false)
     */
    private $compsuppbylvl;

    /**
     * @var int
     *
     * @ORM\Column(name="idClassePredilection", type="integer", nullable=false)
     */
    private $idclassepredilection;

    /**
     * @var bool
     *
     * @ORM\Column(name="immuniteSommeil", type="boolean", nullable=false)
     */
    private $immunitesommeil;

    /**
     * @var int
     *
     * @ORM\Column(name="visionNocturne", type="integer", nullable=false)
     */
    private $visionnocturne;

    /**
     * @var int
     *
     * @ORM\Column(name="modifFor", type="integer", nullable=false)
     */
    private $modiffor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modifDex", type="integer", nullable=false)
     */
    private $modifdex = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modifCon", type="integer", nullable=false)
     */
    private $modifcon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modifInt", type="integer", nullable=false)
     */
    private $modifint = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modifSag", type="integer", nullable=false)
     */
    private $modifsag = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modifCha", type="integer", nullable=false)
     */
    private $modifcha = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nbLanguesSupplementaires", type="integer", nullable=false)
     */
    private $nblanguessupplementaires = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Dnd35Age::class, inversedBy="race")
     */
    private $AgeId;

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

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getDonssupplvl1(): ?int
    {
        return $this->donssupplvl1;
    }

    public function setDonssupplvl1(int $donssupplvl1): self
    {
        $this->donssupplvl1 = $donssupplvl1;

        return $this;
    }

    public function getCompsupplvl1(): ?int
    {
        return $this->compsupplvl1;
    }

    public function setCompsupplvl1(int $compsupplvl1): self
    {
        $this->compsupplvl1 = $compsupplvl1;

        return $this;
    }

    public function getCompsuppbylvl(): ?int
    {
        return $this->compsuppbylvl;
    }

    public function setCompsuppbylvl(int $compsuppbylvl): self
    {
        $this->compsuppbylvl = $compsuppbylvl;

        return $this;
    }

    public function getIdclassepredilection(): ?int
    {
        return $this->idclassepredilection;
    }

    public function setIdclassepredilection(int $idclassepredilection): self
    {
        $this->idclassepredilection = $idclassepredilection;

        return $this;
    }

    public function isImmunitesommeil(): ?bool
    {
        return $this->immunitesommeil;
    }

    public function setImmunitesommeil(bool $immunitesommeil): self
    {
        $this->immunitesommeil = $immunitesommeil;

        return $this;
    }

    public function getVisionnocturne(): ?int
    {
        return $this->visionnocturne;
    }

    public function setVisionnocturne(int $visionnocturne): self
    {
        $this->visionnocturne = $visionnocturne;

        return $this;
    }

    public function getModiffor(): ?int
    {
        return $this->modiffor;
    }

    public function setModiffor(int $modiffor): self
    {
        $this->modiffor = $modiffor;

        return $this;
    }

    public function getModifdex(): ?int
    {
        return $this->modifdex;
    }

    public function setModifdex(int $modifdex): self
    {
        $this->modifdex = $modifdex;

        return $this;
    }

    public function getModifcon(): ?int
    {
        return $this->modifcon;
    }

    public function setModifcon(int $modifcon): self
    {
        $this->modifcon = $modifcon;

        return $this;
    }

    public function getModifint(): ?int
    {
        return $this->modifint;
    }

    public function setModifint(int $modifint): self
    {
        $this->modifint = $modifint;

        return $this;
    }

    public function getModifsag(): ?int
    {
        return $this->modifsag;
    }

    public function setModifsag(int $modifsag): self
    {
        $this->modifsag = $modifsag;

        return $this;
    }

    public function getModifcha(): ?int
    {
        return $this->modifcha;
    }

    public function setModifcha(int $modifcha): self
    {
        $this->modifcha = $modifcha;

        return $this;
    }

    public function getNblanguessupplementaires(): ?int
    {
        return $this->nblanguessupplementaires;
    }

    public function setNblanguessupplementaires(int $nblanguessupplementaires): self
    {
        $this->nblanguessupplementaires = $nblanguessupplementaires;

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

    public function getAgeId(): ?Dnd35Age
    {
        return $this->AgeId;
    }

    public function setAgeId(?Dnd35Age $AgeId): self
    {
        $this->AgeId = $AgeId;

        return $this;
    }


}
