<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Classedieu
 *
 * @ORM\Table(name="dnd35_classeDieu")
 * @ORM\Entity(repositoryClass="App\Repository\ClasseDieuRepository")
 */
class Dnd35Classedieu
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
     * @ORM\Column(name="idDieu", type="integer", nullable=false)
     */
    private $iddieu;

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

    public function getIddieu(): ?int
    {
        return $this->iddieu;
    }

    public function setIddieu(int $iddieu): self
    {
        $this->iddieu = $iddieu;

        return $this;
    }


}
