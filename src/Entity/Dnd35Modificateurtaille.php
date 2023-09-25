<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Modificateurtaille
 *
 * @ORM\Table(name="dnd35_modificateurTaille")
 * @ORM\Entity(repositoryClass="App\Repository\ModificateursTailleRepository")
 */
class Dnd35Modificateurtaille
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
     * @ORM\Column(name="taille", type="string", length=3, nullable=false)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusCA", type="integer", nullable=false)
     */
    private $bonusca;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusBBA", type="integer", nullable=false)
     */
    private $bonusbba;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusDiscretion", type="integer", nullable=false)
     */
    private $bonusdiscretion;

    /**
     * @var int
     *
     * @ORM\Column(name="poidsMax", type="integer", nullable=false)
     */
    private $poidsmax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getBonusca(): ?int
    {
        return $this->bonusca;
    }

    public function setBonusca(int $bonusca): self
    {
        $this->bonusca = $bonusca;

        return $this;
    }

    public function getBonusbba(): ?int
    {
        return $this->bonusbba;
    }

    public function setBonusbba(int $bonusbba): self
    {
        $this->bonusbba = $bonusbba;

        return $this;
    }

    public function getBonusdiscretion(): ?int
    {
        return $this->bonusdiscretion;
    }

    public function setBonusdiscretion(int $bonusdiscretion): self
    {
        $this->bonusdiscretion = $bonusdiscretion;

        return $this;
    }

    public function getPoidsmax(): ?int
    {
        return $this->poidsmax;
    }

    public function setPoidsmax(int $poidsmax): self
    {
        $this->poidsmax = $poidsmax;

        return $this;
    }


}
