<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classecompetence
 *
 * @ORM\Table(name="dnd35_classeCompetence")
 * @ORM\Entity(repositoryClass="App\Repository\ClasseCompetenceRepository")
 */
class Dnd35Classecompetence
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
     * @ORM\Column(name="idCompetence", type="integer", nullable=false)
     */
    private $idcompetence;

    /**
     * @var bool
     *
     * @ORM\Column(name="isCC", type="boolean", nullable=false)
     */
    private $iscc = '0';

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

    public function getIdcompetence(): ?int
    {
        return $this->idcompetence;
    }

    public function setIdcompetence(int $idcompetence): self
    {
        $this->idcompetence = $idcompetence;

        return $this;
    }

    public function isIscc(): ?bool
    {
        return $this->iscc;
    }

    public function setIscc(bool $iscc): self
    {
        $this->iscc = $iscc;

        return $this;
    }


}
