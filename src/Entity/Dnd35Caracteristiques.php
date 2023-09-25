<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Caracteristiques
 *
 * @ORM\Table(name="dnd35_caracteristiques")
 * @ORM\Entity(repositoryClass="App\Repository\CaracteristiquesRepository")
 */
class Dnd35Caracteristiques
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="diminutif", type="string", length=3, nullable=false)
     */
    private $diminutif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDiminutif(): ?string
    {
        return $this->diminutif;
    }

    public function setDiminutif(string $diminutif): self
    {
        $this->diminutif = $diminutif;

        return $this;
    }


}
