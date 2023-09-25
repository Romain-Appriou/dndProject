<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Objetsnonmagiques
 *
 * @ORM\Table(name="dnd35_objetsNonMagiques")
 * @ORM\Entity(repositoryClass="App\Repository\ObjetsNonMagiquesRepository")
 */
class Dnd35Objetsnonmagiques
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
     * @ORM\Column(name="prcMinCat", type="integer", nullable=false)
     */
    private $prcmincat;

    /**
     * @var int
     *
     * @ORM\Column(name="prcMaxCat", type="integer", nullable=false)
     */
    private $prcmaxcat;

    /**
     * @var int
     *
     * @ORM\Column(name="prcMinSsCat", type="integer", nullable=false, options={"default"="100"})
     */
    private $prcminsscat = 100;

    /**
     * @var int
     *
     * @ORM\Column(name="prcMaxSsCat", type="integer", nullable=false, options={"default"="100"})
     */
    private $prcmaxsscat = 100;

    /**
     * @var int
     *
     * @ORM\Column(name="prcMinObj", type="integer", nullable=false)
     */
    private $prcminobj;

    /**
     * @var int
     *
     * @ORM\Column(name="prcMaxObj", type="integer", nullable=false)
     */
    private $prcmaxobj;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=45, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=45, nullable=false)
     */
    private $objet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prcMinTailleP", type="integer", nullable=true)
     */
    private $prcmintaillep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prcMaxTailleP", type="integer", nullable=true)
     */
    private $prcmaxtaillep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prcMinTailleM", type="integer", nullable=true)
     */
    private $prcmintaillem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prcMaxTailleM", type="integer", nullable=true)
     */
    private $prcmaxtaillem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrcmincat(): ?int
    {
        return $this->prcmincat;
    }

    public function setPrcmincat(int $prcmincat): self
    {
        $this->prcmincat = $prcmincat;

        return $this;
    }

    public function getPrcmaxcat(): ?int
    {
        return $this->prcmaxcat;
    }

    public function setPrcmaxcat(int $prcmaxcat): self
    {
        $this->prcmaxcat = $prcmaxcat;

        return $this;
    }

    public function getPrcminsscat(): ?int
    {
        return $this->prcminsscat;
    }

    public function setPrcminsscat(int $prcminsscat): self
    {
        $this->prcminsscat = $prcminsscat;

        return $this;
    }

    public function getPrcmaxsscat(): ?int
    {
        return $this->prcmaxsscat;
    }

    public function setPrcmaxsscat(int $prcmaxsscat): self
    {
        $this->prcmaxsscat = $prcmaxsscat;

        return $this;
    }

    public function getPrcminobj(): ?int
    {
        return $this->prcminobj;
    }

    public function setPrcminobj(int $prcminobj): self
    {
        $this->prcminobj = $prcminobj;

        return $this;
    }

    public function getPrcmaxobj(): ?int
    {
        return $this->prcmaxobj;
    }

    public function setPrcmaxobj(int $prcmaxobj): self
    {
        $this->prcmaxobj = $prcmaxobj;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getPrcmintaillep(): ?int
    {
        return $this->prcmintaillep;
    }

    public function setPrcmintaillep(?int $prcmintaillep): self
    {
        $this->prcmintaillep = $prcmintaillep;

        return $this;
    }

    public function getPrcmaxtaillep(): ?int
    {
        return $this->prcmaxtaillep;
    }

    public function setPrcmaxtaillep(?int $prcmaxtaillep): self
    {
        $this->prcmaxtaillep = $prcmaxtaillep;

        return $this;
    }

    public function getPrcmintaillem(): ?int
    {
        return $this->prcmintaillem;
    }

    public function setPrcmintaillem(?int $prcmintaillem): self
    {
        $this->prcmintaillem = $prcmintaillem;

        return $this;
    }

    public function getPrcmaxtaillem(): ?int
    {
        return $this->prcmaxtaillem;
    }

    public function setPrcmaxtaillem(?int $prcmaxtaillem): self
    {
        $this->prcmaxtaillem = $prcmaxtaillem;

        return $this;
    }


}
