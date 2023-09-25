<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Langues
 *
 * @ORM\Table(name="dnd35_langues")
 * @ORM\Entity(repositoryClass="App\Repository\LanguesRepository")
 */
class Dnd35Langues
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
     * @ORM\Column(name="langue", type="string", length=50, nullable=false)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateurs", type="string", length=255, nullable=false)
     */
    private $utilisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="alphabet", type="string", length=50, nullable=false)
     */
    private $alphabet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getUtilisateurs(): ?string
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(string $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    public function getAlphabet(): ?string
    {
        return $this->alphabet;
    }

    public function setAlphabet(string $alphabet): self
    {
        $this->alphabet = $alphabet;

        return $this;
    }


}
