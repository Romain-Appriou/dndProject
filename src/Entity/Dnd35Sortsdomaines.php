<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Sortsdomaines
 *
 * @ORM\Table(name="dnd35_sortsDomaines")
 * @ORM\Entity(repositoryClass="App\Repository\SortsDomainesRepository")
 */
class Dnd35Sortsdomaines
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
     * @ORM\Column(name="domaine", type="string", length=255, nullable=false)
     */
    private $domaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pouvoir", type="text", length=65535, nullable=true)
     */
    private $pouvoir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getPouvoir(): ?string
    {
        return $this->pouvoir;
    }

    public function setPouvoir(?string $pouvoir): self
    {
        $this->pouvoir = $pouvoir;

        return $this;
    }


}
