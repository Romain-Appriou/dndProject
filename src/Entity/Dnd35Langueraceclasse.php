<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Langueraceclasse
 *
 * @ORM\Table(name="dnd35_langueRaceClasse")
 * @ORM\Entity(repositoryClass="App\Repository\LangueRaceClasseRepository")
 */
class Dnd35Langueraceclasse
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
     * @ORM\Column(name="idLangue", type="integer", nullable=false)
     */
    private $idlangue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idRace", type="integer", nullable=true)
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
     * @ORM\Column(name="supplementaire", type="boolean", nullable=false)
     */
    private $supplementaire = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdlangue(): ?int
    {
        return $this->idlangue;
    }

    public function setIdlangue(int $idlangue): self
    {
        $this->idlangue = $idlangue;

        return $this;
    }

    public function getIdrace(): ?int
    {
        return $this->idrace;
    }

    public function setIdrace(?int $idrace): self
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

    public function isSupplementaire(): ?bool
    {
        return $this->supplementaire;
    }

    public function setSupplementaire(bool $supplementaire): self
    {
        $this->supplementaire = $supplementaire;

        return $this;
    }


}
