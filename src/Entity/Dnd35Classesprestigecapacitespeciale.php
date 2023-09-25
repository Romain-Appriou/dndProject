<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classesprestigecapacitespeciale
 *
 * @ORM\Table(name="dnd35_classesPrestigeCapaciteSpeciale")
 * @ORM\Entity(repositoryClass="App\Repository\ClassesPrestigeCapaciteSpecialeRepository")
 */
class Dnd35Classesprestigecapacitespeciale
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
     * @ORM\Column(name="idClassePrestige", type="integer", nullable=false)
     */
    private $idclasseprestige;

    /**
     * @var int
     *
     * @ORM\Column(name="idCapacite", type="integer", nullable=false)
     */
    private $idcapacite;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdclasseprestige(): ?int
    {
        return $this->idclasseprestige;
    }

    public function setIdclasseprestige(int $idclasseprestige): self
    {
        $this->idclasseprestige = $idclasseprestige;

        return $this;
    }

    public function getIdcapacite(): ?int
    {
        return $this->idcapacite;
    }

    public function setIdcapacite(int $idcapacite): self
    {
        $this->idcapacite = $idcapacite;

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

    public function getPrecision(): ?string
    {
        return $this->precision;
    }

    public function setPrecision(string $precision): self
    {
        $this->precision = $precision;

        return $this;
    }


}
