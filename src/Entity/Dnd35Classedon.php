<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classedon
 *
 * @ORM\Table(name="dnd35_classeDon")
 * @ORM\Entity(repositoryClass="App\Repository\ClasseDonRepository")
 */
class Dnd35Classedon
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
     * @ORM\Column(name="idClasse", type="integer", nullable=false)
     */
    private $idclasse;

    /**
     * @var int
     *
     * @ORM\Column(name="idDon", type="integer", nullable=false)
     */
    private $iddon;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false, options={"default"="1"})
     */
    private $level = 1;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIddon(): ?int
    {
        return $this->iddon;
    }

    public function setIddon(int $iddon): self
    {
        $this->iddon = $iddon;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }


}
