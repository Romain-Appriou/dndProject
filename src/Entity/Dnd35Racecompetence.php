<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Racecompetence
 *
 * @ORM\Table(name="dnd35_raceCompetence")
 * @ORM\Entity(repositoryClass="App\Repository\RaceCompetenceRepository")
 */
class Dnd35Racecompetence
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
     * @ORM\Column(name="idCompetence", type="integer", nullable=false)
     */
    private $idcompetence;

    /**
     * @var int
     *
     * @ORM\Column(name="bonus", type="integer", nullable=false)
     */
    private $bonus;

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

    public function getIdcompetence(): ?int
    {
        return $this->idcompetence;
    }

    public function setIdcompetence(int $idcompetence): self
    {
        $this->idcompetence = $idcompetence;

        return $this;
    }

    public function getBonus(): ?int
    {
        return $this->bonus;
    }

    public function setBonus(int $bonus): self
    {
        $this->bonus = $bonus;

        return $this;
    }


}
