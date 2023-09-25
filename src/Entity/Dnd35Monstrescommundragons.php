<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstrescommundragons
 *
 * @ORM\Table(name="dnd35_monstresCommunDragons")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresCommunsDragonsRepository")
 */
class Dnd35Monstrescommundragons
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="combat", type="text", length=65535, nullable=false)
     */
    private $combat;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriesAge", type="text", length=65535, nullable=false)
     */
    private $categoriesage;

    /**
     * @var string
     *
     * @ORM\Column(name="espacesOccupes", type="text", length=65535, nullable=false)
     */
    private $espacesoccupes;

    /**
     * @var string
     *
     * @ORM\Column(name="attaquesDegats", type="text", length=65535, nullable=false)
     */
    private $attaquesdegats;

    /**
     * @var string
     *
     * @ORM\Column(name="souffle", type="text", length=65535, nullable=false)
     */
    private $souffle;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCombat(): ?string
    {
        return $this->combat;
    }

    public function setCombat(string $combat): self
    {
        $this->combat = $combat;

        return $this;
    }

    public function getCategoriesage(): ?string
    {
        return $this->categoriesage;
    }

    public function setCategoriesage(string $categoriesage): self
    {
        $this->categoriesage = $categoriesage;

        return $this;
    }

    public function getEspacesoccupes(): ?string
    {
        return $this->espacesoccupes;
    }

    public function setEspacesoccupes(string $espacesoccupes): self
    {
        $this->espacesoccupes = $espacesoccupes;

        return $this;
    }

    public function getAttaquesdegats(): ?string
    {
        return $this->attaquesdegats;
    }

    public function setAttaquesdegats(string $attaquesdegats): self
    {
        $this->attaquesdegats = $attaquesdegats;

        return $this;
    }

    public function getSouffle(): ?string
    {
        return $this->souffle;
    }

    public function setSouffle(string $souffle): self
    {
        $this->souffle = $souffle;

        return $this;
    }


}
