<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Sortclasseprestige
 *
 * @ORM\Table(name="dnd35_sortclassePrestige")
 * @ORM\Entity(repositoryClass="App\Repository\SortClassePrestigeRepository")
 */
class Dnd35Sortclasseprestige
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
     * @ORM\Column(name="idSort", type="integer", nullable=false)
     */
    private $idsort;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdsort(): ?int
    {
        return $this->idsort;
    }

    public function setIdsort(int $idsort): self
    {
        $this->idsort = $idsort;

        return $this;
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


}
