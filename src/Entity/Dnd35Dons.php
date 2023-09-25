<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Dons
 *
 * @ORM\Table(name="dnd35_dons")
 * @ORM\Entity(repositoryClass="App\Repository\DonsRepository")
 */
class Dnd35Dons
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special", type="text", length=16777215, nullable=true)
     */
    private $special;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bbaPrerequis", type="integer", nullable=true)
     */
    private $bbaprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forPrerequis", type="integer", nullable=true)
     */
    private $forprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dexPrerequis", type="integer", nullable=true)
     */
    private $dexprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="conPrerequis", type="integer", nullable=true)
     */
    private $conprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="intPrerequis", type="integer", nullable=true)
     */
    private $intprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sagPrerequis", type="integer", nullable=true)
     */
    private $sagprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="chaPrerequis", type="integer", nullable=true)
     */
    private $chaprerequis;

    /**
     * @var bool
     *
     * @ORM\Column(name="donSuppGuerrier", type="boolean", nullable=false)
     */
    private $donsuppguerrier = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="niveauLanceurSort", type="integer", nullable=true)
     */
    private $niveaulanceursort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSpecial(): ?string
    {
        return $this->special;
    }

    public function setSpecial(?string $special): self
    {
        $this->special = $special;

        return $this;
    }

    public function getBbaprerequis(): ?int
    {
        return $this->bbaprerequis;
    }

    public function setBbaprerequis(?int $bbaprerequis): self
    {
        $this->bbaprerequis = $bbaprerequis;

        return $this;
    }

    public function getForprerequis(): ?int
    {
        return $this->forprerequis;
    }

    public function setForprerequis(?int $forprerequis): self
    {
        $this->forprerequis = $forprerequis;

        return $this;
    }

    public function getDexprerequis(): ?int
    {
        return $this->dexprerequis;
    }

    public function setDexprerequis(?int $dexprerequis): self
    {
        $this->dexprerequis = $dexprerequis;

        return $this;
    }

    public function getConprerequis(): ?int
    {
        return $this->conprerequis;
    }

    public function setConprerequis(?int $conprerequis): self
    {
        $this->conprerequis = $conprerequis;

        return $this;
    }

    public function getIntprerequis(): ?int
    {
        return $this->intprerequis;
    }

    public function setIntprerequis(?int $intprerequis): self
    {
        $this->intprerequis = $intprerequis;

        return $this;
    }

    public function getSagprerequis(): ?int
    {
        return $this->sagprerequis;
    }

    public function setSagprerequis(?int $sagprerequis): self
    {
        $this->sagprerequis = $sagprerequis;

        return $this;
    }

    public function getChaprerequis(): ?int
    {
        return $this->chaprerequis;
    }

    public function setChaprerequis(?int $chaprerequis): self
    {
        $this->chaprerequis = $chaprerequis;

        return $this;
    }

    public function isDonsuppguerrier(): ?bool
    {
        return $this->donsuppguerrier;
    }

    public function setDonsuppguerrier(bool $donsuppguerrier): self
    {
        $this->donsuppguerrier = $donsuppguerrier;

        return $this;
    }

    public function getNiveaulanceursort(): ?int
    {
        return $this->niveaulanceursort;
    }

    public function setNiveaulanceursort(?int $niveaulanceursort): self
    {
        $this->niveaulanceursort = $niveaulanceursort;

        return $this;
    }


}
