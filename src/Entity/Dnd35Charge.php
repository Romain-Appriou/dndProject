<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Charge
 *
 * @ORM\Table(name="dnd35_charge")
 * @ORM\Entity(repositoryClass="App\Repository\ChargeRepository")
 */
class Dnd35Charge
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
     * @ORM\Column(name="force", type="integer", nullable=false)
     */
    private $force;

    /**
     * @var float
     *
     * @ORM\Column(name="legereMax", type="float", precision=10, scale=0, nullable=false)
     */
    private $legeremax;

    /**
     * @var float
     *
     * @ORM\Column(name="intermediaireMax", type="float", precision=10, scale=0, nullable=false)
     */
    private $intermediairemax;

    /**
     * @var float
     *
     * @ORM\Column(name="lourdeMax", type="float", precision=10, scale=0, nullable=false)
     */
    private $lourdemax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForce(): ?int
    {
        return $this->force;
    }

    public function setForce(int $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function getLegeremax(): ?float
    {
        return $this->legeremax;
    }

    public function setLegeremax(float $legeremax): self
    {
        $this->legeremax = $legeremax;

        return $this;
    }

    public function getIntermediairemax(): ?float
    {
        return $this->intermediairemax;
    }

    public function setIntermediairemax(float $intermediairemax): self
    {
        $this->intermediairemax = $intermediairemax;

        return $this;
    }

    public function getLourdemax(): ?float
    {
        return $this->lourdemax;
    }

    public function setLourdemax(float $lourdemax): self
    {
        $this->lourdemax = $lourdemax;

        return $this;
    }


}
