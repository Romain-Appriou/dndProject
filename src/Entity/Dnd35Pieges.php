<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Pieges
 *
 * @ORM\Table(name="dnd35_pieges")
 * @ORM\Entity(repositoryClass="App\Repository\PiegesRepository")
 */
class Dnd35Pieges
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
     * @var int
     *
     * @ORM\Column(name="fp", type="integer", nullable=false, options={"default"="10"})
     */
    private $fp = 10;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="declencheur", type="string", length=100, nullable=false)
     */
    private $declencheur;

    /**
     * @var string
     *
     * @ORM\Column(name="remiseEnPlace", type="string", length=50, nullable=false)
     */
    private $remiseenplace;

    /**
     * @var string
     *
     * @ORM\Column(name="attaque", type="string", length=500, nullable=false)
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="fouille", type="integer", nullable=false, options={"default"="20"})
     */
    private $fouille = 20;

    /**
     * @var int
     *
     * @ORM\Column(name="sabotage", type="integer", nullable=false, options={"default"="20"})
     */
    private $sabotage = 20;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false, options={"default"="1"})
     */
    private $prix = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="coutXp", type="integer", nullable=true)
     */
    private $coutxp;

    /**
     * @var bool
     *
     * @ORM\Column(name="pnj", type="boolean", nullable=false)
     */
    private $pnj = '0';

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

    public function getFp(): ?int
    {
        return $this->fp;
    }

    public function setFp(int $fp): self
    {
        $this->fp = $fp;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDeclencheur(): ?string
    {
        return $this->declencheur;
    }

    public function setDeclencheur(string $declencheur): self
    {
        $this->declencheur = $declencheur;

        return $this;
    }

    public function getRemiseenplace(): ?string
    {
        return $this->remiseenplace;
    }

    public function setRemiseenplace(string $remiseenplace): self
    {
        $this->remiseenplace = $remiseenplace;

        return $this;
    }

    public function getAttaque(): ?string
    {
        return $this->attaque;
    }

    public function setAttaque(string $attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }

    public function getFouille(): ?int
    {
        return $this->fouille;
    }

    public function setFouille(int $fouille): self
    {
        $this->fouille = $fouille;

        return $this;
    }

    public function getSabotage(): ?int
    {
        return $this->sabotage;
    }

    public function setSabotage(int $sabotage): self
    {
        $this->sabotage = $sabotage;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCoutxp(): ?int
    {
        return $this->coutxp;
    }

    public function setCoutxp(?int $coutxp): self
    {
        $this->coutxp = $coutxp;

        return $this;
    }

    public function isPnj(): ?bool
    {
        return $this->pnj;
    }

    public function setPnj(bool $pnj): self
    {
        $this->pnj = $pnj;

        return $this;
    }


}
