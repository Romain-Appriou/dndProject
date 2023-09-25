<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsmagiquespotionshuiles
 *
 * @ORM\Table(name="dnd35_objetsMagiquesPotionsHuiles")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsMagiquesPotionsHuilesRepository")
 */
class Dnd35Objetsmagiquespotionshuiles
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
     * @ORM\Column(name="puissance", type="string", length=50, nullable=false, options={"default"="puissante"})
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
     * @var string
     *
     * @ORM\Column(name="potion", type="string", length=255, nullable=false)
     */
    private $potion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

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

    public function getPotion(): ?string
    {
        return $this->potion;
    }

    public function setPotion(string $potion): self
    {
        $this->potion = $potion;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
