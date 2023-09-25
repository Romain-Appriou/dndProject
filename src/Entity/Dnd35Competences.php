<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Competences
 *
 * @ORM\Table(name="dnd35_competences")
 * @ORM\Entity(repositoryClass="App\Repository\CompetencesRepository")
 */
class Dnd35Competences
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
     * @ORM\Column(name="caracteristique", type="string", length=3, nullable=false)
     */
    private $caracteristique;

    /**
     * @var bool
     *
     * @ORM\Column(name="malusArmure", type="boolean", nullable=false)
     */
    private $malusarmure;

    /**
     * @var bool
     *
     * @ORM\Column(name="formationNecessaire", type="boolean", nullable=false)
     */
    private $formationnecessaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="text", length=65535, nullable=true)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nouvelleTentative", type="text", length=65535, nullable=true)
     */
    private $nouvelletentative;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special", type="text", length=65535, nullable=true)
     */
    private $special;

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

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): self
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    public function isMalusarmure(): ?bool
    {
        return $this->malusarmure;
    }

    public function setMalusarmure(bool $malusarmure): self
    {
        $this->malusarmure = $malusarmure;

        return $this;
    }

    public function isFormationnecessaire(): ?bool
    {
        return $this->formationnecessaire;
    }

    public function setFormationnecessaire(bool $formationnecessaire): self
    {
        $this->formationnecessaire = $formationnecessaire;

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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getNouvelletentative(): ?string
    {
        return $this->nouvelletentative;
    }

    public function setNouvelletentative(?string $nouvelletentative): self
    {
        $this->nouvelletentative = $nouvelletentative;

        return $this;
    }

    public function getSpecial(): ?string
    {
        return $this->special;
    }

    public function setSpecial(?string $special): self
    {
        $this->special = $special;

        return $this;
    }


}
