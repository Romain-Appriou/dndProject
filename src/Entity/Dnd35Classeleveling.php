<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classeleveling
 *
 * @ORM\Table(name="dnd35_classeLeveling")
 * @ORM\Entity(repositoryClass="App\Repository\ClasseLevellingRepository")
 */
class Dnd35Classeleveling
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
     * @var int
     *
     * @ORM\Column(name="idClasse", type="integer", nullable=false)
     */
    private $idclasse;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="bba", type="string", length=20, nullable=false)
     */
    private $bba;

    /**
     * @var int
     *
     * @ORM\Column(name="reflexes", type="integer", nullable=false)
     */
    private $reflexes;

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
     * @var int
     *
     * @ORM\Column(name="special", type="integer", nullable=false)
     */
    private $special;

    /**
     * @var int
     *
     * @ORM\Column(name="donSupp", type="integer", nullable=false)
     */
    private $donsupp;

    /**
     * @var int
     *
     * @ORM\Column(name="donSuppGuerrier", type="integer", nullable=false)
     */
    private $donsuppguerrier = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="delugeCoups", type="string", length=25, nullable=true)
     */
    private $delugecoups;

    /**
     * @var string|null
     *
     * @ORM\Column(name="degatsMainsNuesP", type="string", length=10, nullable=true)
     */
    private $degatsmainsnuesp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="degatsMainsNuesM", type="string", length=10, nullable=true)
     */
    private $degatsmainsnuesm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusCa", type="integer", nullable=true)
     */
    private $bonusca = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="deplacementAccelere", type="integer", nullable=true)
     */
    private $deplacementaccelere;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl0", type="integer", nullable=true)
     */
    private $sortconnulvl0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl1", type="integer", nullable=true)
     */
    private $sortconnulvl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl2", type="integer", nullable=true)
     */
    private $sortconnulvl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl3", type="integer", nullable=true)
     */
    private $sortconnulvl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl4", type="integer", nullable=true)
     */
    private $sortconnulvl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl5", type="integer", nullable=true)
     */
    private $sortconnulvl5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl6", type="integer", nullable=true)
     */
    private $sortconnulvl6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl7", type="integer", nullable=true)
     */
    private $sortconnulvl7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl8", type="integer", nullable=true)
     */
    private $sortconnulvl8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortConnuLvl9", type="integer", nullable=true)
     */
    private $sortconnulvl9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl0", type="integer", nullable=true)
     */
    private $sortlvl0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl1", type="integer", nullable=true)
     */
    private $sortlvl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl2", type="integer", nullable=true)
     */
    private $sortlvl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl3", type="integer", nullable=true)
     */
    private $sortlvl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl4", type="integer", nullable=true)
     */
    private $sortlvl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl5", type="integer", nullable=true)
     */
    private $sortlvl5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl6", type="integer", nullable=true)
     */
    private $sortlvl6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl7", type="integer", nullable=true)
     */
    private $sortlvl7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl8", type="integer", nullable=true)
     */
    private $sortlvl8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortLvl9", type="integer", nullable=true)
     */
    private $sortlvl9;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }

    public function setIdclasse(int $idclasse): self
    {
        $this->idclasse = $idclasse;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getBba(): ?string
    {
        return $this->bba;
    }

    public function setBba(string $bba): self
    {
        $this->bba = $bba;

        return $this;
    }

    public function getReflexes(): ?int
    {
        return $this->reflexes;
    }

    public function setReflexes(int $reflexes): self
    {
        $this->reflexes = $reflexes;

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

    public function getSpecial(): ?int
    {
        return $this->special;
    }

    public function setSpecial(int $special): self
    {
        $this->special = $special;

        return $this;
    }

    public function getDonsupp(): ?int
    {
        return $this->donsupp;
    }

    public function setDonsupp(int $donsupp): self
    {
        $this->donsupp = $donsupp;

        return $this;
    }

    public function getDonsuppguerrier(): ?int
    {
        return $this->donsuppguerrier;
    }

    public function setDonsuppguerrier(int $donsuppguerrier): self
    {
        $this->donsuppguerrier = $donsuppguerrier;

        return $this;
    }

    public function getDelugecoups(): ?string
    {
        return $this->delugecoups;
    }

    public function setDelugecoups(?string $delugecoups): self
    {
        $this->delugecoups = $delugecoups;

        return $this;
    }

    public function getDegatsmainsnuesp(): ?string
    {
        return $this->degatsmainsnuesp;
    }

    public function setDegatsmainsnuesp(?string $degatsmainsnuesp): self
    {
        $this->degatsmainsnuesp = $degatsmainsnuesp;

        return $this;
    }

    public function getDegatsmainsnuesm(): ?string
    {
        return $this->degatsmainsnuesm;
    }

    public function setDegatsmainsnuesm(?string $degatsmainsnuesm): self
    {
        $this->degatsmainsnuesm = $degatsmainsnuesm;

        return $this;
    }

    public function getBonusca(): ?int
    {
        return $this->bonusca;
    }

    public function setBonusca(?int $bonusca): self
    {
        $this->bonusca = $bonusca;

        return $this;
    }

    public function getDeplacementaccelere(): ?int
    {
        return $this->deplacementaccelere;
    }

    public function setDeplacementaccelere(?int $deplacementaccelere): self
    {
        $this->deplacementaccelere = $deplacementaccelere;

        return $this;
    }

    public function getSortconnulvl0(): ?int
    {
        return $this->sortconnulvl0;
    }

    public function setSortconnulvl0(?int $sortconnulvl0): self
    {
        $this->sortconnulvl0 = $sortconnulvl0;

        return $this;
    }

    public function getSortconnulvl1(): ?int
    {
        return $this->sortconnulvl1;
    }

    public function setSortconnulvl1(?int $sortconnulvl1): self
    {
        $this->sortconnulvl1 = $sortconnulvl1;

        return $this;
    }

    public function getSortconnulvl2(): ?int
    {
        return $this->sortconnulvl2;
    }

    public function setSortconnulvl2(?int $sortconnulvl2): self
    {
        $this->sortconnulvl2 = $sortconnulvl2;

        return $this;
    }

    public function getSortconnulvl3(): ?int
    {
        return $this->sortconnulvl3;
    }

    public function setSortconnulvl3(?int $sortconnulvl3): self
    {
        $this->sortconnulvl3 = $sortconnulvl3;

        return $this;
    }

    public function getSortconnulvl4(): ?int
    {
        return $this->sortconnulvl4;
    }

    public function setSortconnulvl4(?int $sortconnulvl4): self
    {
        $this->sortconnulvl4 = $sortconnulvl4;

        return $this;
    }

    public function getSortconnulvl5(): ?int
    {
        return $this->sortconnulvl5;
    }

    public function setSortconnulvl5(?int $sortconnulvl5): self
    {
        $this->sortconnulvl5 = $sortconnulvl5;

        return $this;
    }

    public function getSortconnulvl6(): ?int
    {
        return $this->sortconnulvl6;
    }

    public function setSortconnulvl6(?int $sortconnulvl6): self
    {
        $this->sortconnulvl6 = $sortconnulvl6;

        return $this;
    }

    public function getSortconnulvl7(): ?int
    {
        return $this->sortconnulvl7;
    }

    public function setSortconnulvl7(?int $sortconnulvl7): self
    {
        $this->sortconnulvl7 = $sortconnulvl7;

        return $this;
    }

    public function getSortconnulvl8(): ?int
    {
        return $this->sortconnulvl8;
    }

    public function setSortconnulvl8(?int $sortconnulvl8): self
    {
        $this->sortconnulvl8 = $sortconnulvl8;

        return $this;
    }

    public function getSortconnulvl9(): ?int
    {
        return $this->sortconnulvl9;
    }

    public function setSortconnulvl9(?int $sortconnulvl9): self
    {
        $this->sortconnulvl9 = $sortconnulvl9;

        return $this;
    }

    public function getSortlvl0(): ?int
    {
        return $this->sortlvl0;
    }

    public function setSortlvl0(?int $sortlvl0): self
    {
        $this->sortlvl0 = $sortlvl0;

        return $this;
    }

    public function getSortlvl1(): ?int
    {
        return $this->sortlvl1;
    }

    public function setSortlvl1(?int $sortlvl1): self
    {
        $this->sortlvl1 = $sortlvl1;

        return $this;
    }

    public function getSortlvl2(): ?int
    {
        return $this->sortlvl2;
    }

    public function setSortlvl2(?int $sortlvl2): self
    {
        $this->sortlvl2 = $sortlvl2;

        return $this;
    }

    public function getSortlvl3(): ?int
    {
        return $this->sortlvl3;
    }

    public function setSortlvl3(?int $sortlvl3): self
    {
        $this->sortlvl3 = $sortlvl3;

        return $this;
    }

    public function getSortlvl4(): ?int
    {
        return $this->sortlvl4;
    }

    public function setSortlvl4(?int $sortlvl4): self
    {
        $this->sortlvl4 = $sortlvl4;

        return $this;
    }

    public function getSortlvl5(): ?int
    {
        return $this->sortlvl5;
    }

    public function setSortlvl5(?int $sortlvl5): self
    {
        $this->sortlvl5 = $sortlvl5;

        return $this;
    }

    public function getSortlvl6(): ?int
    {
        return $this->sortlvl6;
    }

    public function setSortlvl6(?int $sortlvl6): self
    {
        $this->sortlvl6 = $sortlvl6;

        return $this;
    }

    public function getSortlvl7(): ?int
    {
        return $this->sortlvl7;
    }

    public function setSortlvl7(?int $sortlvl7): self
    {
        $this->sortlvl7 = $sortlvl7;

        return $this;
    }

    public function getSortlvl8(): ?int
    {
        return $this->sortlvl8;
    }

    public function setSortlvl8(?int $sortlvl8): self
    {
        $this->sortlvl8 = $sortlvl8;

        return $this;
    }

    public function getSortlvl9(): ?int
    {
        return $this->sortlvl9;
    }

    public function setSortlvl9(?int $sortlvl9): self
    {
        $this->sortlvl9 = $sortlvl9;

        return $this;
    }


}
