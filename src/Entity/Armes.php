<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armes
 *
 * @ORM\Table(name="armes")
 * @ORM\Entity(repositoryClass="App\Repository\ArmesRepository")
 */
class Armes
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sousType", type="string", length=50, nullable=false)
     */
    private $soustype;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="degatsP", type="string", length=10, nullable=false)
     */
    private $degatsp;

    /**
     * @var string
     *
     * @ORM\Column(name="degatsM", type="string", length=10, nullable=false)
     */
    private $degatsm;

    /**
     * @var string
     *
     * @ORM\Column(name="critique", type="string", length=15, nullable=false)
     */
    private $critique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="portee", type="integer", nullable=true)
     */
    private $portee;

    /**
     * @var float|null
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=true)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDegats", type="string", length=50, nullable=false)
     */
    private $typedegats;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forceMin", type="integer", nullable=true)
     */
    private $forcemin;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDegatsp(): ?string
    {
        return $this->degatsp;
    }

    public function setDegatsp(string $degatsp): self
    {
        $this->degatsp = $degatsp;

        return $this;
    }

    public function getDegatsm(): ?string
    {
        return $this->degatsm;
    }

    public function setDegatsm(string $degatsm): self
    {
        $this->degatsm = $degatsm;

        return $this;
    }

    public function getCritique(): ?string
    {
        return $this->critique;
    }

    public function setCritique(string $critique): self
    {
        $this->critique = $critique;

        return $this;
    }

    public function getPortee(): ?int
    {
        return $this->portee;
    }

    public function setPortee(?int $portee): self
    {
        $this->portee = $portee;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTypedegats(): ?string
    {
        return $this->typedegats;
    }

    public function setTypedegats(string $typedegats): self
    {
        $this->typedegats = $typedegats;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getForcemin(): ?int
    {
        return $this->forcemin;
    }

    public function setForcemin(?int $forcemin): self
    {
        $this->forcemin = $forcemin;

        return $this;
    }


}
