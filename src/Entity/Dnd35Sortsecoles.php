<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Sortsecoles
 *
 * @ORM\Table(name="dnd35_sortsEcoles")
 * @ORM\Entity(repositoryClass="App\Repository\SortsEcolesRepository")
 */
class Dnd35Sortsecoles
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
     * @ORM\Column(name="ecole", type="string", length=255, nullable=false)
     */
    private $ecole;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var bool
     *
     * @ORM\Column(name="peutEtreInterdite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $peutetreinterdite = true;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEcoleIntedite", type="integer", nullable=false, options={"default"="2"})
     */
    private $nbecoleintedite = 2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEcole(): ?string
    {
        return $this->ecole;
    }

    public function setEcole(string $ecole): self
    {
        $this->ecole = $ecole;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function isPeutetreinterdite(): ?bool
    {
        return $this->peutetreinterdite;
    }

    public function setPeutetreinterdite(bool $peutetreinterdite): self
    {
        $this->peutetreinterdite = $peutetreinterdite;

        return $this;
    }

    public function getNbecoleintedite(): ?int
    {
        return $this->nbecoleintedite;
    }

    public function setNbecoleintedite(int $nbecoleintedite): self
    {
        $this->nbecoleintedite = $nbecoleintedite;

        return $this;
    }


}
