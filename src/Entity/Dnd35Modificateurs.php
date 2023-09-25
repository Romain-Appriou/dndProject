<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Modificateurs
 *
 * @ORM\Table(name="dnd35_modificateurs")
 * @ORM\Entity(repositoryClass="App\Repository\ModificateursRepository")
 */
class Dnd35Modificateurs
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
     * @ORM\Column(name="valeurCaracteristique", type="integer", nullable=false)
     */
    private $valeurcaracteristique;

    /**
     * @var int
     *
     * @ORM\Column(name="modificateur", type="integer", nullable=false)
     */
    private $modificateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort0", type="integer", nullable=true)
     */
    private $bonussort0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort1", type="integer", nullable=true)
     */
    private $bonussort1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort2", type="integer", nullable=true)
     */
    private $bonussort2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort3", type="integer", nullable=true)
     */
    private $bonussort3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort4", type="integer", nullable=true)
     */
    private $bonussort4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort5", type="integer", nullable=true)
     */
    private $bonussort5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort6", type="integer", nullable=true)
     */
    private $bonussort6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort7", type="integer", nullable=true)
     */
    private $bonussort7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort8", type="integer", nullable=true)
     */
    private $bonussort8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonusSort9", type="integer", nullable=true)
     */
    private $bonussort9;

    /**
     * @var bool
     *
     * @ORM\Column(name="canCast", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cancast = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeurcaracteristique(): ?int
    {
        return $this->valeurcaracteristique;
    }

    public function setValeurcaracteristique(int $valeurcaracteristique): self
    {
        $this->valeurcaracteristique = $valeurcaracteristique;

        return $this;
    }

    public function getModificateur(): ?int
    {
        return $this->modificateur;
    }

    public function setModificateur(int $modificateur): self
    {
        $this->modificateur = $modificateur;

        return $this;
    }

    public function getBonussort0(): ?int
    {
        return $this->bonussort0;
    }

    public function setBonussort0(?int $bonussort0): self
    {
        $this->bonussort0 = $bonussort0;

        return $this;
    }

    public function getBonussort1(): ?int
    {
        return $this->bonussort1;
    }

    public function setBonussort1(?int $bonussort1): self
    {
        $this->bonussort1 = $bonussort1;

        return $this;
    }

    public function getBonussort2(): ?int
    {
        return $this->bonussort2;
    }

    public function setBonussort2(?int $bonussort2): self
    {
        $this->bonussort2 = $bonussort2;

        return $this;
    }

    public function getBonussort3(): ?int
    {
        return $this->bonussort3;
    }

    public function setBonussort3(?int $bonussort3): self
    {
        $this->bonussort3 = $bonussort3;

        return $this;
    }

    public function getBonussort4(): ?int
    {
        return $this->bonussort4;
    }

    public function setBonussort4(?int $bonussort4): self
    {
        $this->bonussort4 = $bonussort4;

        return $this;
    }

    public function getBonussort5(): ?int
    {
        return $this->bonussort5;
    }

    public function setBonussort5(?int $bonussort5): self
    {
        $this->bonussort5 = $bonussort5;

        return $this;
    }

    public function getBonussort6(): ?int
    {
        return $this->bonussort6;
    }

    public function setBonussort6(?int $bonussort6): self
    {
        $this->bonussort6 = $bonussort6;

        return $this;
    }

    public function getBonussort7(): ?int
    {
        return $this->bonussort7;
    }

    public function setBonussort7(?int $bonussort7): self
    {
        $this->bonussort7 = $bonussort7;

        return $this;
    }

    public function getBonussort8(): ?int
    {
        return $this->bonussort8;
    }

    public function setBonussort8(?int $bonussort8): self
    {
        $this->bonussort8 = $bonussort8;

        return $this;
    }

    public function getBonussort9(): ?int
    {
        return $this->bonussort9;
    }

    public function setBonussort9(?int $bonussort9): self
    {
        $this->bonussort9 = $bonussort9;

        return $this;
    }

    public function isCancast(): ?bool
    {
        return $this->cancast;
    }

    public function setCancast(bool $cancast): self
    {
        $this->cancast = $cancast;

        return $this;
    }


}
