<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Armuresboucliers
 *
 * @ORM\Table(name="dnd35_armuresBoucliers")
 * @ORM\Entity(repositoryClass="App\Repository\ArmuresBoucliersRepository")
 */
class Dnd35Armuresboucliers
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="bonus", type="integer", nullable=false)
     */
    private $bonus;

    /**
     * @var int
     *
     * @ORM\Column(name="dexMax", type="integer", nullable=false)
     */
    private $dexmax;

    /**
     * @var int
     *
     * @ORM\Column(name="malusTests", type="integer", nullable=false)
     */
    private $malustests;

    /**
     * @var int
     *
     * @ORM\Column(name="echecSorts", type="integer", nullable=false)
     */
    private $echecsorts;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse9", type="integer", nullable=false)
     */
    private $vitesse9;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse6", type="integer", nullable=false)
     */
    private $vitesse6;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getBonus(): ?int
    {
        return $this->bonus;
    }

    public function setBonus(int $bonus): self
    {
        $this->bonus = $bonus;

        return $this;
    }

    public function getDexmax(): ?int
    {
        return $this->dexmax;
    }

    public function setDexmax(int $dexmax): self
    {
        $this->dexmax = $dexmax;

        return $this;
    }

    public function getMalustests(): ?int
    {
        return $this->malustests;
    }

    public function setMalustests(int $malustests): self
    {
        $this->malustests = $malustests;

        return $this;
    }

    public function getEchecsorts(): ?int
    {
        return $this->echecsorts;
    }

    public function setEchecsorts(int $echecsorts): self
    {
        $this->echecsorts = $echecsorts;

        return $this;
    }

    public function getVitesse9(): ?int
    {
        return $this->vitesse9;
    }

    public function setVitesse9(int $vitesse9): self
    {
        $this->vitesse9 = $vitesse9;

        return $this;
    }

    public function getVitesse6(): ?int
    {
        return $this->vitesse6;
    }

    public function setVitesse6(int $vitesse6): self
    {
        $this->vitesse6 = $vitesse6;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }


}
