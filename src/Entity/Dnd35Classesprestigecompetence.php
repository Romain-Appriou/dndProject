<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classesprestigecompetence
 *
 * @ORM\Table(name="dnd35_classesPrestigeCompetence")
 * @ORM\Entity(repositoryClass="App\Repository\ClassesPrestigeCompetenceRepository")
 */
class Dnd35Classesprestigecompetence
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
     * @var int
     *
     * @ORM\Column(name="isCC", type="integer", nullable=false, options={"default"="1"})
     */
    private $iscc = 1;

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

    public function getIscc(): ?int
    {
        return $this->iscc;
    }

    public function setIscc(int $iscc): self
    {
        $this->iscc = $iscc;

        return $this;
    }


}
