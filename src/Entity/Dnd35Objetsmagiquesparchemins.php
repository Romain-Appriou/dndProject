<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiquesparchemins
 *
 * @ORM\Table(name="dnd35_objetsMagiquesParchemins")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesParcheminsRepository")
 */
class Dnd35Objetsmagiquesparchemins
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
     * @ORM\Column(name="typeSort", type="string", length=20, nullable=false, options={"default"="divine"})
     */
    private $typesort = 'divine';

    /**
     * @var int
     *
     * @ORM\Column(name="niveauSort", type="integer", nullable=false, options={"default"="9"})
     */
    private $niveausort = 9;

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
     * @ORM\Column(name="sort", type="string", length=255, nullable=false)
     */
    private $sort;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false, options={"default"="3825"})
     */
    private $prix = 3825;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypesort(): ?string
    {
        return $this->typesort;
    }

    public function setTypesort(string $typesort): self
    {
        $this->typesort = $typesort;

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

    public function getSort(): ?string
    {
        return $this->sort;
    }

    public function setSort(string $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
