<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Capacitesspeciales
 *
 * @ORM\Table(name="dnd35_capacitesSpeciales")
 * @ORM\Entity(repositoryClass="App\Repository\CapacitesSpecialesRepository")
 */
class Dnd35Capacitesspeciales
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Dnd35Classecapacitespeciale::class, mappedBy="idCapacite", cascade={"persist", "remove"})
     */
    private $dnd35Classecapacitespeciale;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDnd35Classecapacitespeciale(): ?Dnd35Classecapacitespeciale
    {
        return $this->dnd35Classecapacitespeciale;
    }

    public function setDnd35Classecapacitespeciale(?Dnd35Classecapacitespeciale $dnd35Classecapacitespeciale): self
    {
        // unset the owning side of the relation if necessary
        if ($dnd35Classecapacitespeciale === null && $this->dnd35Classecapacitespeciale !== null) {
            $this->dnd35Classecapacitespeciale->setIdCapacite(null);
        }

        // set the owning side of the relation if necessary
        if ($dnd35Classecapacitespeciale !== null && $dnd35Classecapacitespeciale->getIdCapacite() !== $this) {
            $dnd35Classecapacitespeciale->setIdCapacite($this);
        }

        $this->dnd35Classecapacitespeciale = $dnd35Classecapacitespeciale;

        return $this;
    }


}
