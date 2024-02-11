<?php

namespace App\Entity;

use App\Repository\SpellRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpellRepository::class)]
class Spell
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $castingTime = null;

    #[ORM\Column]
    private ?int $distance = null;

    #[ORM\Column(length: 255)]
    private ?string $components = null;

    #[ORM\Column(length: 255)]
    private ?string $damage = null;

    #[ORM\Column(length: 255)]
    private ?string $damageType = null;

    #[ORM\Column(length: 255)]
    private ?string $modifiers = null;

    #[ORM\ManyToMany(targetEntity: Character::class, mappedBy: 'spÃells')]
    private Collection $characters;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCastingTime(): ?string
    {
        return $this->castingTime;
    }

    public function setCastingTime(string $castingTime): static
    {
        $this->castingTime = $castingTime;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): static
    {
        $this->distance = $distance;

        return $this;
    }

    public function getComponents(): ?string
    {
        return $this->components;
    }

    public function setComponents(string $components): static
    {
        $this->components = $components;

        return $this;
    }

    public function getDamage(): ?string
    {
        return $this->damage;
    }

    public function setDamage(string $damage): static
    {
        $this->damage = $damage;

        return $this;
    }

    public function getDamageType(): ?string
    {
        return $this->damageType;
    }

    public function setDamageType(string $damageType): static
    {
        $this->damageType = $damageType;

        return $this;
    }

    public function getModifiers(): ?string
    {
        return $this->modifiers;
    }

    public function setModifiers(string $modifiers): static
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    /**
     * @return Collection<int, Character>
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Character $character): static
    {
        if (!$this->characters->contains($character)) {
            $this->characters->add($character);
            $character->addSpEll($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): static
    {
        if ($this->characters->removeElement($character)) {
            $character->removeSpEll($this);
        }

        return $this;
    }
}
