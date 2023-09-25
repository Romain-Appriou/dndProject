<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiques
 *
 * @ORM\Table(name="dnd35_objetsMagiques")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesRepository")
 */
class Dnd35Objetsmagiques
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
     * @ORM\Column(name="puissance", type="string", length=20, nullable=false, options={"default"="faible"})
     */
    private $puissance = 'faible';

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
     * @ORM\Column(name="categorie", type="string", length=50, nullable=false)
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
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

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


}
