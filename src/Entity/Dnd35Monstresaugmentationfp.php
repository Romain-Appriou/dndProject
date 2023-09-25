<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresaugmentationfp
 *
 * @ORM\Table(name="dnd35_monstresAugmentationFP")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresAugmentationFPRepository")
 */
class Dnd35Monstresaugmentationfp
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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="augmentation", type="string", length=255, nullable=false)
     */
    private $augmentation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAugmentation(): ?string
    {
        return $this->augmentation;
    }

    public function setAugmentation(string $augmentation): self
    {
        $this->augmentation = $augmentation;

        return $this;
    }


}
