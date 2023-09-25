<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Taillepoids
 *
 * @ORM\Table(name="dnd35_taillePoids")
 * @ORM\Entity(repositoryClass="App\Repository\TaillePoidsRepository")
 */
class Dnd35Taillepoids
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
     * @ORM\Column(name="race", type="integer", nullable=false)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="tailleMin", type="integer", nullable=false)
     */
    private $taillemin;

    /**
     * @var int
     *
     * @ORM\Column(name="tailleMax", type="integer", nullable=false)
     */
    private $taillemax;

    /**
     * @var int
     *
     * @ORM\Column(name="poidsMin", type="integer", nullable=false)
     */
    private $poidsmin;

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

    public function getRace(): ?int
    {
        return $this->race;
    }

    public function setRace(int $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTaillemin(): ?int
    {
        return $this->taillemin;
    }

    public function setTaillemin(int $taillemin): self
    {
        $this->taillemin = $taillemin;

        return $this;
    }

    public function getTaillemax(): ?int
    {
        return $this->taillemax;
    }

    public function setTaillemax(int $taillemax): self
    {
        $this->taillemax = $taillemax;

        return $this;
    }

    public function getPoidsmin(): ?int
    {
        return $this->poidsmin;
    }

    public function setPoidsmin(int $poidsmin): self
    {
        $this->poidsmin = $poidsmin;

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
