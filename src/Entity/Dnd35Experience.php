<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Experience
 *
 * @ORM\Table(name="dnd35_experience")
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceRepository")
 */
class Dnd35Experience
{
    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $niveau;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer", nullable=false)
     */
    private $experience;

    /**
     * @var int
     *
     * @ORM\Column(name="dons", type="integer", nullable=false)
     */
    private $dons;

    /**
     * @var int
     *
     * @ORM\Column(name="augmentationCarac", type="integer", nullable=false)
     */
    private $augmentationcarac;

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getDons(): ?int
    {
        return $this->dons;
    }

    public function setDons(int $dons): self
    {
        $this->dons = $dons;

        return $this;
    }

    public function getAugmentationcarac(): ?int
    {
        return $this->augmentationcarac;
    }

    public function setAugmentationcarac(int $augmentationcarac): self
    {
        $this->augmentationcarac = $augmentationcarac;

        return $this;
    }


}
