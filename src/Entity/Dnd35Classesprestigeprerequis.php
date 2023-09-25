<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classesprestigeprerequis
 *
 * @ORM\Table(name="dnd35_classesPrestigePrerequis")
 * @ORM\Entity(repositoryClass="App\Repository\ClassesPrestigePrerequisRepository")
 */
class Dnd35Classesprestigeprerequis
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255, nullable=false)
     */
    private $valeur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maitrise", type="integer", nullable=true)
     */
    private $maitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre", type="integer", nullable=true)
     */
    private $nombre;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getMaitrise(): ?int
    {
        return $this->maitrise;
    }

    public function setMaitrise(?int $maitrise): self
    {
        $this->maitrise = $maitrise;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


}
