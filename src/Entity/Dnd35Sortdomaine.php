<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Sortdomaine
 *
 * @ORM\Table(name="dnd35_sortdomaine")
 * @ORM\Entity(repositoryClass="App\Repository\SortDomaineRepository")
 */
class Dnd35Sortdomaine
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
     * @ORM\Column(name="idSort", type="integer", nullable=false)
     */
    private $idsort;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=20, nullable=false)
     */
    private $domaine;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false, options={"default"="1"})
     */
    private $niveau = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdsort(): ?int
    {
        return $this->idsort;
    }

    public function setIdsort(int $idsort): self
    {
        $this->idsort = $idsort;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }


}
