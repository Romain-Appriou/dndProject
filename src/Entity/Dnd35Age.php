<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dnd35Age
 *
 * @ORM\Table(name="dnd35_age")
 * @ORM\Entity(repositoryClass="App\Repository\AgeRepository")
 */
class Dnd35Age
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
     * @ORM\Column(name="ageAdulte", type="integer", nullable=false)
     */
    private $ageadulte;

    /**
     * @var int
     *
     * @ORM\Column(name="ageMur", type="integer", nullable=false)
     */
    private $agemur;

    /**
     * @var int
     *
     * @ORM\Column(name="ageGrand", type="integer", nullable=false)
     */
    private $agegrand;

    /**
     * @var int
     *
     * @ORM\Column(name="ageVenerable", type="integer", nullable=false)
     */
    private $agevenerable;

    /**
     * @var int
     *
     * @ORM\Column(name="ageMaximal", type="integer", nullable=false)
     */
    private $agemaximal;

    /**
     * @ORM\Column(name="race", type="integer", nullable=false)
     */
    private $race;

    public function __construct()
    {
        $this->race = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getAgeadulte(): ?int
    {
        return $this->ageadulte;
    }

    public function setAgeadulte(int $ageadulte): self
    {
        $this->ageadulte = $ageadulte;

        return $this;
    }

    public function getAgemur(): ?int
    {
        return $this->agemur;
    }

    public function setAgemur(int $agemur): self
    {
        $this->agemur = $agemur;

        return $this;
    }

    public function getAgegrand(): ?int
    {
        return $this->agegrand;
    }

    public function setAgegrand(int $agegrand): self
    {
        $this->agegrand = $agegrand;

        return $this;
    }

    public function getAgevenerable(): ?int
    {
        return $this->agevenerable;
    }

    public function setAgevenerable(int $agevenerable): self
    {
        $this->agevenerable = $agevenerable;

        return $this;
    }

    public function getAgemaximal(): ?int
    {
        return $this->agemaximal;
    }

    public function setAgemaximal(int $agemaximal): self
    {
        $this->agemaximal = $agemaximal;

        return $this;
    }

    /**
     * @return Collection<int, Dnd35Races>
     */
    public function getRace(): Collection
    {
        return $this->race;
    }

    public function addRace(Dnd35Races $race): self
    {
        if (!$this->race->contains($race)) {
            $this->race[] = $race;
            $race->setAgeId($this);
        }

        return $this;
    }

    public function removeRace(Dnd35Races $race): self
    {
        if ($this->race->removeElement($race)) {
            // set the owning side to null (unless already changed)
            if ($race->getAgeId() === $this) {
                $race->setAgeId(null);
            }
        }

        return $this;
    }


}
