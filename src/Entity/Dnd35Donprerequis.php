<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Donprerequis
 *
 * @ORM\Table(name="dnd35_donPrerequis")
 * @ORM\Entity(repositoryClass="App\Repository\DonPrerequisRepository")
 */
class Dnd35Donprerequis
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
     * @var int|null
     *
     * @ORM\Column(name="idDon", type="integer", nullable=true)
     */
    private $iddon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idDonPrerequis", type="integer", nullable=true)
     */
    private $iddonprerequis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idClasse", type="integer", nullable=true)
     */
    private $idclasse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="niveauClasse", type="integer", nullable=true)
     */
    private $niveauclasse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idCompetence", type="integer", nullable=true)
     */
    private $idcompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maitrise", type="integer", nullable=true)
     */
    private $maitrise;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="niveauPersonnage", type="integer", nullable=true)
     */
    private $niveaupersonnage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maniementArme", type="integer", nullable=true)
     */
    private $maniementarme;

    /**
     * @var int|null
     *
     * @ORM\Column(name="niveauLanceurSorts", type="integer", nullable=true)
     */
    private $niveaulanceursorts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIddon(): ?int
    {
        return $this->iddon;
    }

    public function setIddon(?int $iddon): self
    {
        $this->iddon = $iddon;

        return $this;
    }

    public function getIddonprerequis(): ?int
    {
        return $this->iddonprerequis;
    }

    public function setIddonprerequis(?int $iddonprerequis): self
    {
        $this->iddonprerequis = $iddonprerequis;

        return $this;
    }

    public function getIdclasse(): ?int
    {
        return $this->idclasse;
    }

    public function setIdclasse(?int $idclasse): self
    {
        $this->idclasse = $idclasse;

        return $this;
    }

    public function getNiveauclasse(): ?int
    {
        return $this->niveauclasse;
    }

    public function setNiveauclasse(?int $niveauclasse): self
    {
        $this->niveauclasse = $niveauclasse;

        return $this;
    }

    public function getIdcompetence(): ?int
    {
        return $this->idcompetence;
    }

    public function setIdcompetence(?int $idcompetence): self
    {
        $this->idcompetence = $idcompetence;

        return $this;
    }

    public function getMaitrise(): ?int
    {
        return $this->maitrise;
    }

    public function setMaitrise(?int $maitrise): self
    {
        $this->maitrise = $maitrise;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getNiveaupersonnage(): ?int
    {
        return $this->niveaupersonnage;
    }

    public function setNiveaupersonnage(?int $niveaupersonnage): self
    {
        $this->niveaupersonnage = $niveaupersonnage;

        return $this;
    }

    public function getManiementarme(): ?int
    {
        return $this->maniementarme;
    }

    public function setManiementarme(?int $maniementarme): self
    {
        $this->maniementarme = $maniementarme;

        return $this;
    }

    public function getNiveaulanceursorts(): ?int
    {
        return $this->niveaulanceursorts;
    }

    public function setNiveaulanceursorts(?int $niveaulanceursorts): self
    {
        $this->niveaulanceursorts = $niveaulanceursorts;

        return $this;
    }


}
