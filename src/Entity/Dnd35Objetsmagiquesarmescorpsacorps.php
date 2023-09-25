<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiquesarmescorpsacorps
 *
 * @ORM\Table(name="dnd35_objetsMagiquesArmesCorpsACorps")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesArmesCorpsACorpsRepository")
 */
class Dnd35Objetsmagiquesarmescorpsacorps
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
     * @ORM\Column(name="prcMin", type="integer", nullable=false)
     */
    private $prcmin;

    /**
     * @var int
     *
     * @ORM\Column(name="prcmax", type="integer", nullable=false)
     */
    private $prcmax;

    /**
     * @var string
     *
     * @ORM\Column(name="arme", type="string", length=50, nullable=false)
     */
    private $arme;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrcmin(): ?int
    {
        return $this->prcmin;
    }

    public function setPrcmin(int $prcmin): self
    {
        $this->prcmin = $prcmin;

        return $this;
    }

    public function getPrcmax(): ?int
    {
        return $this->prcmax;
    }

    public function setPrcmax(int $prcmax): self
    {
        $this->prcmax = $prcmax;

        return $this;
    }

    public function getArme(): ?string
    {
        return $this->arme;
    }

    public function setArme(string $arme): self
    {
        $this->arme = $arme;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
