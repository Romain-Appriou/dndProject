<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresevolutions
 *
 * @ORM\Table(name="dnd35_monstresEvolutions")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresEvolutionsRepository")
 */
class Dnd35Monstresevolutions
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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="DV", type="string", length=255, nullable=false)
     */
    private $dv;

    /**
     * @var string
     *
     * @ORM\Column(name="bonusAttaque", type="string", length=255, nullable=false)
     */
    private $bonusattaque;

    /**
     * @var string
     *
     * @ORM\Column(name="jsFavorables", type="string", length=255, nullable=false)
     */
    private $jsfavorables;

    /**
     * @var int
     *
     * @ORM\Column(name="ptsCompetence", type="integer", nullable=false)
     */
    private $ptscompetence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDv(): ?string
    {
        return $this->dv;
    }

    public function setDv(string $dv): self
    {
        $this->dv = $dv;

        return $this;
    }

    public function getBonusattaque(): ?string
    {
        return $this->bonusattaque;
    }

    public function setBonusattaque(string $bonusattaque): self
    {
        $this->bonusattaque = $bonusattaque;

        return $this;
    }

    public function getJsfavorables(): ?string
    {
        return $this->jsfavorables;
    }

    public function setJsfavorables(string $jsfavorables): self
    {
        $this->jsfavorables = $jsfavorables;

        return $this;
    }

    public function getPtscompetence(): ?int
    {
        return $this->ptscompetence;
    }

    public function setPtscompetence(int $ptscompetence): self
    {
        $this->ptscompetence = $ptscompetence;

        return $this;
    }


}
