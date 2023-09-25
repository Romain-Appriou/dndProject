<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiquesadversairesdesignes
 *
 * @ORM\Table(name="dnd35_objetsMagiquesAdversairesDesignes")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesAdversairesDesignesRepository")
 */
class Dnd35Objetsmagiquesadversairesdesignes
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
     * @ORM\Column(name="prcMax", type="integer", nullable=false)
     */
    private $prcmax;

    /**
     * @var string
     *
     * @ORM\Column(name="adversaire", type="string", length=255, nullable=false)
     */
    private $adversaire;

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

    public function getAdversaire(): ?string
    {
        return $this->adversaire;
    }

    public function setAdversaire(string $adversaire): self
    {
        $this->adversaire = $adversaire;

        return $this;
    }


}
