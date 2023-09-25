<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresexperience
 *
 * @ORM\Table(name="dnd35_monstresExperience")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresExperienceRepository")
 */
class Dnd35Monstresexperience
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
     * @ORM\Column(name="fpMonstre", type="integer", nullable=false)
     */
    private $fpmonstre;

    /**
     * @var int
     *
     * @ORM\Column(name="lvlPJ", type="integer", nullable=false)
     */
    private $lvlpj;

    /**
     * @var int
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFpmonstre(): ?int
    {
        return $this->fpmonstre;
    }

    public function setFpmonstre(int $fpmonstre): self
    {
        $this->fpmonstre = $fpmonstre;

        return $this;
    }

    public function getLvlpj(): ?int
    {
        return $this->lvlpj;
    }

    public function setLvlpj(int $lvlpj): self
    {
        $this->lvlpj = $lvlpj;

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }


}
