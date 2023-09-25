<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Competencesynergie
 *
 * @ORM\Table(name="dnd35_competenceSynergie")
 * @ORM\Entity(repositoryClass="App\Repository\CompetencesSynergieRepository")
 */
class Dnd35Competencesynergie
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
     * @ORM\Column(name="idCompetenceMaitrise", type="integer", nullable=false)
     */
    private $idcompetencemaitrise;

    /**
     * @var int
     *
     * @ORM\Column(name="idCompetenceBonus", type="integer", nullable=false)
     */
    private $idcompetencebonus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcompetencemaitrise(): ?int
    {
        return $this->idcompetencemaitrise;
    }

    public function setIdcompetencemaitrise(int $idcompetencemaitrise): self
    {
        $this->idcompetencemaitrise = $idcompetencemaitrise;

        return $this;
    }

    public function getIdcompetencebonus(): ?int
    {
        return $this->idcompetencebonus;
    }

    public function setIdcompetencebonus(int $idcompetencebonus): self
    {
        $this->idcompetencebonus = $idcompetencebonus;

        return $this;
    }


}
