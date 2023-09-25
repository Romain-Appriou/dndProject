<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classepredilection
 *
 * @ORM\Table(name="dnd35_classePredilection")
 * @ORM\Entity(repositoryClass="App\Repository\ClassePredilectionRepository")
 */
class Dnd35Classepredilection
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
     * @ORM\Column(name="idRace", type="integer", nullable=false)
     */
    private $idrace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idClasse", type="integer", nullable=true)
     */
    private $idclasse;

    /**
     * @var bool
     *
     * @ORM\Column(name="special", type="boolean", nullable=false)
     */
    private $special;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdrace(): ?int
    {
        return $this->idrace;
    }

    public function setIdrace(int $idrace): self
    {
        $this->idrace = $idrace;

        return $this;
    }

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }

    public function setIdclasse(?int $idclasse): self
    {
        $this->idclasse = $idclasse;

        return $this;
    }

    public function isSpecial(): ?bool
    {
        return $this->special;
    }

    public function setSpecial(bool $special): self
    {
        $this->special = $special;

        return $this;
    }


}
