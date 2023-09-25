<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Monstresaugmentationtaille
 *
 * @ORM\Table(name="dnd35_monstresAugmentationTaille")
 * @ORM\Entity(repositoryClass="App\Repository\MonstresAugmentationTailleRepository")
 */
class Dnd35Monstresaugmentationtaille
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
     * @ORM\Column(name="ancienneTaille", type="string", length=45, nullable=false)
     */
    private $anciennetaille;

    /**
     * @var string
     *
     * @ORM\Column(name="nouvelleTaille", type="string", length=45, nullable=false)
     */
    private $nouvelletaille;

    /**
     * @var int
     *
     * @ORM\Column(name="force", type="integer", nullable=false)
     */
    private $force = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dexterite", type="integer", nullable=false)
     */
    private $dexterite = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="constitution", type="integer", nullable=false)
     */
    private $constitution = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="armureNaturelle", type="integer", nullable=false)
     */
    private $armurenaturelle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="caAttaque", type="integer", nullable=false)
     */
    private $caattaque = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnciennetaille(): ?string
    {
        return $this->anciennetaille;
    }

    public function setAnciennetaille(string $anciennetaille): self
    {
        $this->anciennetaille = $anciennetaille;

        return $this;
    }

    public function getNouvelletaille(): ?string
    {
        return $this->nouvelletaille;
    }

    public function setNouvelletaille(string $nouvelletaille): self
    {
        $this->nouvelletaille = $nouvelletaille;

        return $this;
    }

    public function getForce(): ?int
    {
        return $this->force;
    }

    public function setForce(int $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function getDexterite(): ?int
    {
        return $this->dexterite;
    }

    public function setDexterite(int $dexterite): self
    {
        $this->dexterite = $dexterite;

        return $this;
    }

    public function getConstitution(): ?int
    {
        return $this->constitution;
    }

    public function setConstitution(int $constitution): self
    {
        $this->constitution = $constitution;

        return $this;
    }

    public function getArmurenaturelle(): ?int
    {
        return $this->armurenaturelle;
    }

    public function setArmurenaturelle(int $armurenaturelle): self
    {
        $this->armurenaturelle = $armurenaturelle;

        return $this;
    }

    public function getCaattaque(): ?int
    {
        return $this->caattaque;
    }

    public function setCaattaque(int $caattaque): self
    {
        $this->caattaque = $caattaque;

        return $this;
    }


}
