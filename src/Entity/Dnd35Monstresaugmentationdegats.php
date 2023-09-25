<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresaugmentationdegats
 *
 * @ORM\Table(name="dnd35_monstresAugmentationDegats")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresAugmentationDegatsRepository")
 */
class Dnd35Monstresaugmentationdegats
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
     * @ORM\Column(name="anciensDegats", type="string", length=10, nullable=false)
     */
    private $anciensdegats;

    /**
     * @var string
     *
     * @ORM\Column(name="nouveauxDegats", type="string", length=10, nullable=false)
     */
    private $nouveauxdegats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnciensdegats(): ?string
    {
        return $this->anciensdegats;
    }

    public function setAnciensdegats(string $anciensdegats): self
    {
        $this->anciensdegats = $anciensdegats;

        return $this;
    }

    public function getNouveauxdegats(): ?string
    {
        return $this->nouveauxdegats;
    }

    public function setNouveauxdegats(string $nouveauxdegats): self
    {
        $this->nouveauxdegats = $nouveauxdegats;

        return $this;
    }


}
