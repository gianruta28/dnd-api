<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $class = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\Column(length: 255)]
    private ?string $race = null;

    #[ORM\Column(length: 255)]
    private ?string $background = null;

    #[ORM\Column(length: 255)]
    private ?string $alignment = null;

    #[ORM\Column]
    private ?int $experiencePoints = null;

    #[ORM\Column]
    private ?int $inspiration = null;

    #[ORM\Column]
    private ?int $proficiencyBonus = null;

    #[ORM\Column]
    private ?int $armorClass = null;

    #[ORM\Column]
    private ?int $initiative = null;

    #[ORM\Column]
    private ?int $speed = null;

    #[ORM\Column]
    private array $hitPoints = [];

    #[ORM\Column]
    private array $deathSaves = [];

    #[ORM\Column(length: 500)]
    private ?string $personalityTraits = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ideals = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $bonds = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $flaws = null;

    #[ORM\Column]
    private array $featuresAndTraits = [];

    #[ORM\Column]
    private array $otherProficiencies = [];

    #[ORM\Column(length: 255)]
    private ?string $languages = null;

    #[ORM\Column]
    private array $attacks = [];

    #[ORM\Column]
    private array $spellSlots = [];

    #[ORM\ManyToMany(targetEntity: Spell::class, inversedBy: 'characters')]
    private Collection $spells;

    #[ORM\Column]
    private array $skills = [];

    #[ORM\Column]
    private array $attributes = [];

    #[ORM\OneToOne(mappedBy: 'characterAssigned', cascade: ['persist', 'remove'])]
    private ?Inventory $inventory = null;

    #[ORM\Column]
    private array $savingThrows = [];

    #[ORM\Column]
    private array $hitDice = [];


    public function __construct()
    {
        $this->spells = new ArrayCollection();
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

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): static
    {
        $this->class = $class;

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

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): static
    {
        $this->background = $background;

        return $this;
    }

    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    public function setAlignment(string $alignment): static
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function getExperiencePoints(): ?int
    {
        return $this->experiencePoints;
    }

    public function setExperiencePoints(int $experiencePoints): static
    {
        $this->experiencePoints = $experiencePoints;

        return $this;
    }

    public function getInspiration(): ?int
    {
        return $this->inspiration;
    }

    public function setInspiration(int $inspiration): static
    {
        $this->inspiration = $inspiration;

        return $this;
    }

    public function getProficiencyBonus(): ?int
    {
        return $this->proficiencyBonus;
    }

    public function setProficiencyBonus(int $proficiencyBonus): static
    {
        $this->proficiencyBonus = $proficiencyBonus;

        return $this;
    }

    public function getArmorClass(): ?int
    {
        return $this->armorClass;
    }

    public function setArmorClass(int $armorClass): static
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    public function getInitiative(): ?int
    {
        return $this->initiative;
    }

    public function setInitiative(int $initiative): static
    {
        $this->initiative = $initiative;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): static
    {
        $this->speed = $speed;

        return $this;
    }

    public function getHitPoints(): array
    {
        return $this->hitPoints;
    }

    public function setHitPoints(array $hitPoints): static
    {
        $this->hitPoints = $hitPoints;

        return $this;
    }

    public function getDeathSaves(): array
    {
        return $this->deathSaves;
    }

    public function setDeathSaves(array $deathSaves): static
    {
        $this->deathSaves = $deathSaves;

        return $this;
    }

    public function getPersonalityTraits(): ?string
    {
        return $this->personalityTraits;
    }

    public function setPersonalityTraits(string $personalityTraits): static
    {
        $this->personalityTraits = $personalityTraits;

        return $this;
    }

    public function getIdeals(): ?string
    {
        return $this->ideals;
    }

    public function setIdeals(string $ideals): static
    {
        $this->ideals = $ideals;

        return $this;
    }

    public function getBonds(): ?string
    {
        return $this->bonds;
    }

    public function setBonds(string $bonds): static
    {
        $this->bonds = $bonds;

        return $this;
    }

    public function getFlaws(): ?string
    {
        return $this->flaws;
    }

    public function setFlaws(string $flaws): static
    {
        $this->flaws = $flaws;

        return $this;
    }

    public function getFeaturesAndTraits(): array
    {
        return $this->featuresAndTraits;
    }

    public function setFeaturesAndTraits(array $featuresAndTraits): static
    {
        $this->featuresAndTraits = $featuresAndTraits;

        return $this;
    }

    public function getOtherProficiencies(): array
    {
        return $this->otherProficiencies;
    }

    public function setOtherProficiencies(array $otherProficiencies): static
    {
        $this->otherProficiencies = $otherProficiencies;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(string $languages): static
    {
        $this->languages = $languages;

        return $this;
    }

    public function getAttacks(): array
    {
        return $this->attacks;
    }

    public function setAttacks(array $attacks): static
    {
        $this->attacks = $attacks;

        return $this;
    }

    public function getSpellSlots(): array
    {
        return $this->spellSlots;
    }

    public function setSpellSlots(array $spellSlots): static
    {
        $this->spellSlots = $spellSlots;

        return $this;
    }

    /**
     * @return Collection<int, Spell>
     */
    public function getSpells(): Collection
    {
        return $this->spells;
    }

    public function addSpell(Spell $spell): static
    {
        if (!$this->spells->contains($spell)) {
            $this->spells->add($spell);
        }

        return $this;
    }

    public function removeSpell(Spell $spell): static
    {
        $this->spells->removeElement($spell);

        return $this;
    }

    public function getSkills(): array
    {
        return $this->skills;
    }

    public function setSkills(array $skills): static
    {
        $this->skills = $skills;

        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): static
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getInventory(): ?Inventory
    {
        return $this->inventory;
    }

    public function setInventory(?Inventory $inventory): static
    {
        // unset the owning side of the relation if necessary
        if ($inventory === null && $this->inventory !== null) {
            $this->inventory->setCharacterAssigned(null);
        }

        // set the owning side of the relation if necessary
        if ($inventory !== null && $inventory->getCharacterAssigned() !== $this) {
            $inventory->setCharacterAssigned($this);
        }

        $this->inventory = $inventory;

        return $this;
    }

    public function getSavingThrows(): array
    {
        return $this->savingThrows;
    }

    public function setSavingThrows(array $savingThrows): static
    {
        $this->savingThrows = $savingThrows;

        return $this;
    }

    public function getHitDice(): array
    {
        return $this->hitDice;
    }

    public function setHitDice(array $hitDice): static
    {
        $this->hitDice = $hitDice;

        return $this;
    }

}
