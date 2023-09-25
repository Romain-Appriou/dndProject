<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Racedon
 *
 * @ORM\Table(name="dnd35_raceDon")
 * @ORM\Entity(repositoryClass="App\Repository\RaceDonRepository")
 */
class Dnd35Racedon
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
     * @var int
     *
     * @ORM\Column(name="idDon", type="integer", nullable=false)
     */
    private $iddon;

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

    public function getIddon(): ?int
    {
        return $this->iddon;
    }

    public function setIddon(int $iddon): self
    {
        $this->iddon = $iddon;

        return $this;
    }


}
