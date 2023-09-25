<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Racecapacitespeciale
 *
 * @ORM\Table(name="dnd35_raceCapaciteSpeciale")
 * @ORM\Entity(repositoryClass="App\Repository\RaceCapaciteSpecialeRepository")
 */
class Dnd35Racecapacitespeciale
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
     * @ORM\Column(name="idCompetenceSpeciale", type="integer", nullable=false)
     */
    private $idcompetencespeciale;

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

    public function getIdcompetencespeciale(): ?int
    {
        return $this->idcompetencespeciale;
    }

    public function setIdcompetencespeciale(int $idcompetencespeciale): self
    {
        $this->idcompetencespeciale = $idcompetencespeciale;

        return $this;
    }


}
