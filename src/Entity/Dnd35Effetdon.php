<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Effetdon
 *
 * @ORM\Table(name="dnd35_effetDon")
 * @ORM\Entity(repositoryClass="App\Repository\EffetDonRepository")
 */
class Dnd35Effetdon
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
     * @ORM\Column(name="idDon", type="integer", nullable=false)
     */
    private $iddon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetInitiative", type="integer", nullable=true)
     */
    private $effetinitiative;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetBba", type="integer", nullable=true)
     */
    private $effetbba;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetVigueur", type="integer", nullable=true)
     */
    private $effetvigueur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetReflexe", type="integer", nullable=true)
     */
    private $effetreflexe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetVolonte", type="integer", nullable=true)
     */
    private $effetvolonte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetCa", type="integer", nullable=true)
     */
    private $effetca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetPv", type="integer", nullable=true)
     */
    private $effetpv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="limitationIdArme", type="integer", nullable=true)
     */
    private $limitationidarme;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetCompetence", type="integer", nullable=true)
     */
    private $effetcompetence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="limitationCompetence", type="string", length=50, nullable=true)
     */
    private $limitationcompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effetLutte", type="integer", nullable=true)
     */
    private $effetlutte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIddon(): ?int
    {
        return $this->iddon;
    }

    public function setIddon(int $iddon): self
    {
        $this->iddon = $iddon;

        return $this;
    }

    public function getEffetinitiative(): ?int
    {
        return $this->effetinitiative;
    }

    public function setEffetinitiative(?int $effetinitiative): self
    {
        $this->effetinitiative = $effetinitiative;

        return $this;
    }

    public function getEffetbba(): ?int
    {
        return $this->effetbba;
    }

    public function setEffetbba(?int $effetbba): self
    {
        $this->effetbba = $effetbba;

        return $this;
    }

    public function getEffetvigueur(): ?int
    {
        return $this->effetvigueur;
    }

    public function setEffetvigueur(?int $effetvigueur): self
    {
        $this->effetvigueur = $effetvigueur;

        return $this;
    }

    public function getEffetreflexe(): ?int
    {
        return $this->effetreflexe;
    }

    public function setEffetreflexe(?int $effetreflexe): self
    {
        $this->effetreflexe = $effetreflexe;

        return $this;
    }

    public function getEffetvolonte(): ?int
    {
        return $this->effetvolonte;
    }

    public function setEffetvolonte(?int $effetvolonte): self
    {
        $this->effetvolonte = $effetvolonte;

        return $this;
    }

    public function getEffetca(): ?int
    {
        return $this->effetca;
    }

    public function setEffetca(?int $effetca): self
    {
        $this->effetca = $effetca;

        return $this;
    }

    public function getEffetpv(): ?int
    {
        return $this->effetpv;
    }

    public function setEffetpv(?int $effetpv): self
    {
        $this->effetpv = $effetpv;

        return $this;
    }

    public function getLimitationidarme(): ?int
    {
        return $this->limitationidarme;
    }

    public function setLimitationidarme(?int $limitationidarme): self
    {
        $this->limitationidarme = $limitationidarme;

        return $this;
    }

    public function getEffetcompetence(): ?int
    {
        return $this->effetcompetence;
    }

    public function setEffetcompetence(?int $effetcompetence): self
    {
        $this->effetcompetence = $effetcompetence;

        return $this;
    }

    public function getLimitationcompetence(): ?string
    {
        return $this->limitationcompetence;
    }

    public function setLimitationcompetence(?string $limitationcompetence): self
    {
        $this->limitationcompetence = $limitationcompetence;

        return $this;
    }

    public function getEffetlutte(): ?int
    {
        return $this->effetlutte;
    }

    public function setEffetlutte(?int $effetlutte): self
    {
        $this->effetlutte = $effetlutte;

        return $this;
    }


}
