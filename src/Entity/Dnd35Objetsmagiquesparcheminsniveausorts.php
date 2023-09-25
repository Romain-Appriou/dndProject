<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiquesparcheminsniveausorts
 *
 * @ORM\Table(name="dnd35_objetsMagiquesParcheminsNiveauSorts")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesParcheminsNiveauSortRepository")
 */
class Dnd35Objetsmagiquesparcheminsniveausorts
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
     * @ORM\Column(name="puissance", type="string", length=20, nullable=false, options={"default"="puissante"})
     */
    private $puissance = 'puissante';

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
     * @var int
     *
     * @ORM\Column(name="niveauSort", type="integer", nullable=false)
     */
    private $niveausort;

    /**
     * @var int
     *
     * @ORM\Column(name="niveauLanceur", type="integer", nullable=false)
     */
    private $niveaulanceur;

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

    public function getNiveausort(): ?int
    {
        return $this->niveausort;
    }

    public function setNiveausort(int $niveausort): self
    {
        $this->niveausort = $niveausort;

        return $this;
    }

    public function getNiveaulanceur(): ?int
    {
        return $this->niveaulanceur;
    }

    public function setNiveaulanceur(int $niveaulanceur): self
    {
        $this->niveaulanceur = $niveaulanceur;

        return $this;
    }


}
