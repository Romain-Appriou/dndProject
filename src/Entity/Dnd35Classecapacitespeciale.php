<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classecapacitespeciale
 *
 * @ORM\Table(name="dnd35_classeCapaciteSpeciale")
 * @ORM\Entity(repositoryClass="App\Repository\ClassecapacitespecialeRepository")
 */
class Dnd35Classecapacitespeciale
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
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="precision", type="string", length=255, nullable=false)
     */
    private $precision;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="ClasseCapaciteSpeciales")
     */
    private $idClass;

    /**
     * @ORM\OneToOne(targetEntity=Dnd35Capacitesspeciales::class, inversedBy="dnd35Classecapacitespeciale", cascade={"persist", "remove"})
     */
    private $idCapacite;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrecision(): ?string
    {
        return $this->precision;
    }

    public function setPrecision(string $precision): self
    {
        $this->precision = $precision;

        return $this;
    }

    public function getIdClass(): ?Classes
    {
        return $this->idClass;
    }

    public function setIdClass(?Classes $idClass): self
    {
        $this->idClass = $idClass;

        return $this;
    }

    public function getIdCapacite(): ?Dnd35Capacitesspeciales
    {
        return $this->idCapacite;
    }

    public function setIdCapacite(?Dnd35Capacitesspeciales $idCapacite): self
    {
        $this->idCapacite = $idCapacite;

        return $this;
    }


}
