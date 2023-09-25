<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Sorts
 *
 * @ORM\Table(name="dnd35_sorts")
 * @ORM\Entity(repositoryClass="App\Repository\SortsRepository")
 */
class Dnd35Sorts
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
     * @ORM\Column(name="ecole", type="string", length=50, nullable=true)
     */
    private $ecole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complementEcole", type="string", length=255, nullable=true)
     */
    private $complementecole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sauvegarde", type="text", length=65535, nullable=true)
     */
    private $sauvegarde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="composantes", type="text", length=65535, nullable=true)
     */
    private $composantes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tempsIncantation", type="text", length=65535, nullable=true)
     */
    private $tempsincantation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portee", type="text", length=65535, nullable=true)
     */
    private $portee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effet", type="text", length=65535, nullable=true)
     */
    private $effet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree", type="text", length=65535, nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resistanceMagie", type="text", length=65535, nullable=true)
     */
    private $resistancemagie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cibles", type="text", length=65535, nullable=true)
     */
    private $cibles;

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

    public function getEcole(): ?string
    {
        return $this->ecole;
    }

    public function setEcole(?string $ecole): self
    {
        $this->ecole = $ecole;

        return $this;
    }

    public function getComplementecole(): ?string
    {
        return $this->complementecole;
    }

    public function setComplementecole(?string $complementecole): self
    {
        $this->complementecole = $complementecole;

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

    public function getSauvegarde(): ?string
    {
        return $this->sauvegarde;
    }

    public function setSauvegarde(?string $sauvegarde): self
    {
        $this->sauvegarde = $sauvegarde;

        return $this;
    }

    public function getComposantes(): ?string
    {
        return $this->composantes;
    }

    public function setComposantes(?string $composantes): self
    {
        $this->composantes = $composantes;

        return $this;
    }

    public function getTempsincantation(): ?string
    {
        return $this->tempsincantation;
    }

    public function setTempsincantation(?string $tempsincantation): self
    {
        $this->tempsincantation = $tempsincantation;

        return $this;
    }

    public function getPortee(): ?string
    {
        return $this->portee;
    }

    public function setPortee(?string $portee): self
    {
        $this->portee = $portee;

        return $this;
    }

    public function getEffet(): ?string
    {
        return $this->effet;
    }

    public function setEffet(?string $effet): self
    {
        $this->effet = $effet;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(?string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getResistancemagie(): ?string
    {
        return $this->resistancemagie;
    }

    public function setResistancemagie(?string $resistancemagie): self
    {
        $this->resistancemagie = $resistancemagie;

        return $this;
    }

    public function getCibles(): ?string
    {
        return $this->cibles;
    }

    public function setCibles(?string $cibles): self
    {
        $this->cibles = $cibles;

        return $this;
    }


}
