<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="App\Repository\ClassesRepository")
 */
class Classes
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
     * @var int
     *
     * @ORM\Column(name="poMinLvl1", type="integer", nullable=false)
     */
    private $pominlvl1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="poMaxLvl1", type="integer", nullable=false)
     */
    private $pomaxlvl1 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeMagie", type="string", length=45, nullable=true)
     */
    private $typemagie;

    /**
     * @ORM\OneToMany(targetEntity=Dnd35Classecapacitespeciale::class, mappedBy="idClass")
     */
    private $ClasseCapaciteSpeciales;

    public function __construct()
    {
        $this->ClasseCapaciteSpeciales = new ArrayCollection();
    }

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

    public function getPominlvl1(): ?int
    {
        return $this->pominlvl1;
    }

    public function setPominlvl1(int $pominlvl1): self
    {
        $this->pominlvl1 = $pominlvl1;

        return $this;
    }

    public function getPomaxlvl1(): ?int
    {
        return $this->pomaxlvl1;
    }

    public function setPomaxlvl1(int $pomaxlvl1): self
    {
        $this->pomaxlvl1 = $pomaxlvl1;

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

    public function getTypemagie(): ?string
    {
        return $this->typemagie;
    }

    public function setTypemagie(?string $typemagie): self
    {
        $this->typemagie = $typemagie;

        return $this;
    }

    /**
     * @return Collection<int, Dnd35Classecapacitespeciale>
     */
    public function getClasseCapaciteSpeciales(): Collection
    {
        return $this->ClasseCapaciteSpeciales;
    }

    public function addClasseCapaciteSpeciale(Dnd35Classecapacitespeciale $classeCapaciteSpeciale): self
    {
        if (!$this->ClasseCapaciteSpeciales->contains($classeCapaciteSpeciale)) {
            $this->ClasseCapaciteSpeciales[] = $classeCapaciteSpeciale;
            $classeCapaciteSpeciale->setIdClass($this);
        }

        return $this;
    }

    public function removeClasseCapaciteSpeciale(Dnd35Classecapacitespeciale $classeCapaciteSpeciale): self
    {
        if ($this->ClasseCapaciteSpeciales->removeElement($classeCapaciteSpeciale)) {
            // set the owning side to null (unless already changed)
            if ($classeCapaciteSpeciale->getIdClass() === $this) {
                $classeCapaciteSpeciale->setIdClass(null);
            }
        }

        return $this;
    }


}
