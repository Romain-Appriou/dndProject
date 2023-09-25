<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classesprestige
 *
 * @ORM\Table(name="dnd35_classesPrestige")
 * @ORM\Entity(repositoryClass="App\Repository\ClassesPrestigeRepository")
 */
class Dnd35Classesprestige
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
     * @var int
     *
     * @ORM\Column(name="dV", type="integer", nullable=false)
     */
    private $dv;

    /**
     * @var int
     *
     * @ORM\Column(name="pointsCompetences", type="integer", nullable=false)
     */
    private $pointscompetences;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caracteristiqueLanceurSort", type="string", length=15, nullable=true)
     */
    private $caracteristiquelanceursort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="niveauMax", type="integer", nullable=false, options={"default"="10"})
     */
    private $niveaumax = 10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeMagie", type="string", length=45, nullable=true)
     */
    private $typemagie;

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

    public function getDv(): ?int
    {
        return $this->dv;
    }

    public function setDv(int $dv): self
    {
        $this->dv = $dv;

        return $this;
    }

    public function getPointscompetences(): ?int
    {
        return $this->pointscompetences;
    }

    public function setPointscompetences(int $pointscompetences): self
    {
        $this->pointscompetences = $pointscompetences;

        return $this;
    }

    public function getCaracteristiquelanceursort(): ?string
    {
        return $this->caracteristiquelanceursort;
    }

    public function setCaracteristiquelanceursort(?string $caracteristiquelanceursort): self
    {
        $this->caracteristiquelanceursort = $caracteristiquelanceursort;

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

    public function getNiveaumax(): ?int
    {
        return $this->niveaumax;
    }

    public function setNiveaumax(int $niveaumax): self
    {
        $this->niveaumax = $niveaumax;

        return $this;
    }

    public function getTypemagie(): ?string
    {
        return $this->typemagie;
    }

    public function setTypemagie(?string $typemagie): self
    {
        $this->typemagie = $typemagie;

        return $this;
    }


}
