<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classesalignements
 *
 * @ORM\Table(name="dnd35_classesAlignements")
 * @ORM\Entity(repositoryClass="App\Repository\ClasseAlignementsRepository")
 */
class Dnd35Classesalignements
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
     * @ORM\Column(name="idAlignement", type="integer", nullable=false)
     */
    private $idalignement;

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

    public function getIdalignement(): ?int
    {
        return $this->idalignement;
    }

    public function setIdalignement(int $idalignement): self
    {
        $this->idalignement = $idalignement;

        return $this;
    }


}
