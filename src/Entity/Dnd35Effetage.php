<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Effetage
 *
 * @ORM\Table(name="dnd35_effetAge")
 * @ORM\Entity(repositoryClass="App\Repository\EffetAgeRepository")
 */
class Dnd35Effetage
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
     * @ORM\Column(name="race", type="integer", nullable=false)
     */
    private $race;

    /**
     * @var int
     *
     * @ORM\Column(name="ageMin", type="integer", nullable=false)
     */
    private $agemin;

    /**
     * @var int
     *
     * @ORM\Column(name="ageMax", type="integer", nullable=false)
     */
    private $agemax;

    /**
     * @var int
     *
     * @ORM\Column(name="effetForDexCon", type="integer", nullable=false)
     */
    private $effetfordexcon;

    /**
     * @var int
     *
     * @ORM\Column(name="effetIntSagCha", type="integer", nullable=false)
     */
    private $effetintsagcha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRace(): ?int
    {
        return $this->race;
    }

    public function setRace(int $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getAgemin(): ?int
    {
        return $this->agemin;
    }

    public function setAgemin(int $agemin): self
    {
        $this->agemin = $agemin;

        return $this;
    }

    public function getAgemax(): ?int
    {
        return $this->agemax;
    }

    public function setAgemax(int $agemax): self
    {
        $this->agemax = $agemax;

        return $this;
    }

    public function getEffetfordexcon(): ?int
    {
        return $this->effetfordexcon;
    }

    public function setEffetfordexcon(int $effetfordexcon): self
    {
        $this->effetfordexcon = $effetfordexcon;

        return $this;
    }

    public function getEffetintsagcha(): ?int
    {
        return $this->effetintsagcha;
    }

    public function setEffetintsagcha(int $effetintsagcha): self
    {
        $this->effetintsagcha = $effetintsagcha;

        return $this;
    }


}
