<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Effetcharge
 *
 * @ORM\Table(name="dnd35_effetCharge")
 * @ORM\Entity(repositoryClass="App\Repository\EffetChargeRepository")
 */
class Dnd35Effetcharge
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
     * @var string
     *
     * @ORM\Column(name="charge", type="string", length=20, nullable=false)
     */
    private $charge;

    /**
     * @var int
     *
     * @ORM\Column(name="dexMax", type="integer", nullable=false)
     */
    private $dexmax;

    /**
     * @var int
     *
     * @ORM\Column(name="malusTests", type="integer", nullable=false)
     */
    private $malustests;

    /**
     * @var float
     *
     * @ORM\Column(name="vitesse9", type="float", precision=10, scale=0, nullable=false)
     */
    private $vitesse9;

    /**
     * @var float
     *
     * @ORM\Column(name="vitesse6", type="float", precision=10, scale=0, nullable=false)
     */
    private $vitesse6;

    /**
     * @var string
     *
     * @ORM\Column(name="course", type="string", length=2, nullable=false)
     */
    private $course;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharge(): ?string
    {
        return $this->charge;
    }

    public function setCharge(string $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getDexmax(): ?int
    {
        return $this->dexmax;
    }

    public function setDexmax(int $dexmax): self
    {
        $this->dexmax = $dexmax;

        return $this;
    }

    public function getMalustests(): ?int
    {
        return $this->malustests;
    }

    public function setMalustests(int $malustests): self
    {
        $this->malustests = $malustests;

        return $this;
    }

    public function getVitesse9(): ?float
    {
        return $this->vitesse9;
    }

    public function setVitesse9(float $vitesse9): self
    {
        $this->vitesse9 = $vitesse9;

        return $this;
    }

    public function getVitesse6(): ?float
    {
        return $this->vitesse6;
    }

    public function setVitesse6(float $vitesse6): self
    {
        $this->vitesse6 = $vitesse6;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }


}
