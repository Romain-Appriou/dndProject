<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Racedieu
 *
 * @ORM\Table(name="dnd35_raceDieu")
 * @ORM\Entity(repositoryClass="App\Repository\RaceDieuRepository")
 */
class Dnd35Racedieu
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
     * @ORM\Column(name="idRace", type="integer", nullable=false)
     */
    private $idrace;

    /**
     * @var int
     *
     * @ORM\Column(name="idDieu", type="integer", nullable=false)
     */
    private $iddieu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdrace(): ?int
    {
        return $this->idrace;
    }

    public function setIdrace(int $idrace): self
    {
        $this->idrace = $idrace;

        return $this;
    }

    public function getIddieu(): ?int
    {
        return $this->iddieu;
    }

    public function setIddieu(int $iddieu): self
    {
        $this->iddieu = $iddieu;

        return $this;
    }


}
