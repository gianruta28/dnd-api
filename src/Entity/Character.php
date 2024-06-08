<?php

namespace App\Entity;

use App\DTO\AttributesDTO;
use App\DTO\DeathSavesDTO;
use App\DTO\HitDiceDTO;
use App\DTO\HitPointsDTO;
use App\DTO\ProficiencyDTO;
use App\DTO\SavingThrowsDTO;
use App\DTO\SkillsDTO;
use App\DTO\SpellSlotsDTO;
use App\DTO\TraitDTO;
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
    private ?array $featuresAndTraits = [];

    #[ORM\Column]
    private ?array $otherProficiencies = [];

    #[ORM\Column(length: 255)]
    private ?string $languages = null;

    #[ORM\Column]
    private ?array $attacks = [];

    #[ORM\Column]
    private ?array $spellSlots = [];

    #[ORM\ManyToMany(targetEntity: Spell::class, inversedBy: 'characters')]
    private Collection $spells;

    #[ORM\Column]
    private ?array $skills = [];

    #[ORM\Column]
    private array $attributes = [];

    #[ORM\OneToOne(mappedBy: 'characterAssigned', cascade: ['persist', 'remove'])]
    private ?Inventory $inventory = null;

    #[ORM\Column]
    private array $savingThrows = [];

    #[ORM\Column]
    private array $hitDice = [];

    #[ORM\ManyToMany(targetEntity: Session::class, mappedBy: 'characters')]
    private Collection $sessions;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;


    public function __construct()
    {
        $this->spells = new ArrayCollection();
        $this->sessions = new ArrayCollection();
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

    public function getHitPoints(): HitPointsDTO
    {
        $hitPointsDTO = new HitPointsDTO();
        return $hitPointsDTO->fromJson($this->hitPoints);
    }

    public function setHitPoints(HitPointsDTO $hitPoints): static
    {
        $this->hitPoints = $hitPoints->toJson();

        return $this;
    }

    public function getDeathSaves(): DeathSavesDTO
    {
        $deathSavesDTO = new DeathSavesDTO();
        return $deathSavesDTO->fromJson($this->deathSaves);
    }

    public function setDeathSaves(DeathSavesDTO $deathSaves): static
    {

        $this->deathSaves = $deathSaves->toJson();

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
        $traits = [];
        foreach ($this->featuresAndTraits as $trait){
            $traitDTO = new TraitDTO();
            $traits[] = $traitDTO->fromJson($trait);
        }
        return $traits;
    }

    public function setFeaturesAndTraits(array $featuresAndTraits): static
    {
        $traits = [];
        foreach ($featuresAndTraits as $trait){
            $traits[] = $trait->toJson();
        }
        $this->featuresAndTraits = $traits;

        return $this;
    }

    public function getOtherProficiencies(): array
    {
        $proficiencies = [];
        foreach ($this->otherProficiencies as $proficiency){
            $proficiencyDTO = new ProficiencyDTO();
            $proficiencies[] = $proficiencyDTO->fromJson($proficiency);
        }
        return $proficiencies;
    }

    public function setOtherProficiencies(array $otherProficiencies): static
    {
        $proficiencies = [];
        foreach ($otherProficiencies as $proficiency){
            $proficiencies[] = $proficiency->toJson();
        }
        $this->otherProficiencies = $proficiencies;

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

    public function getSpellSlots(): SpellSlotsDTO
    {
        $spellSlots = new SpellSlotsDTO();

        return $spellSlots->fromJson($this->spellSlots);
    }

    public function setSpellSlots(SpellSlotsDTO $spellSlots): static
    {
        $this->spellSlots = $spellSlots->toJson();

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

    public function getSkills(): SkillsDTO
    {
        $skillsDTO = new SkillsDTO();
        return $skillsDTO->fromJson($this->skills);
    }

    public function setSkills(SkillsDTO $skillsDTO): static
    {
        $skills = $skillsDTO->toJson();
        $this->skills = $skills;

        return $this;
    }

    public function getAttributes(): AttributesDTO
    {
        $attributes = new AttributesDTO();

        return $attributes->fromJson($this->attributes);
    }

    public function setAttributes(AttributesDTO $attributesDTO): static
    {
        $attributes = $attributesDTO->toJson();
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

    public function getSavingThrows(): SavingThrowsDTO
    {
        $savingThrowsDTO = new SavingThrowsDTO();
        return $savingThrowsDTO->fromJson($this->savingThrows);
    }

    public function setSavingThrows(SavingThrowsDTO $savingThrows): static
    {

        $this->savingThrows = $savingThrows->toJson();

        return $this;
    }

    public function getHitDice(): HitDiceDTO
    {
        $hitDiceDTO = new HitDiceDTO();
        return $hitDiceDTO->fromJson($this->hitDice);
    }

    public function setHitDice(HitDiceDTO $hitDice): static
    {
        $this->hitDice = $hitDice->toJson();

        return $this;
    }

    /**
     * @return Collection<int, Session>
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    public function addSession(Session $session): static
    {
        if (!$this->sessions->contains($session)) {
            $this->sessions->add($session);
            $session->addCharacter($this);
        }

        return $this;
    }

    public function removeSession(Session $session): static
    {
        if ($this->sessions->removeElement($session)) {
            $session->removeCharacter($this);
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function toJson(){
        return [
            "id" => $this->id,
            "name" => $this->name,
            "class" => $this->class,
            "level" => $this->level,
            "race" => $this->race,
            "background" => $this->background,
            "alignment" => $this->alignment,
            "experiencePoints" => $this->experiencePoints,
            "inspiration" => $this->inspiration,
            "proficiencyBonus" => $this->proficiencyBonus,
            "armorClass" => $this->armorClass,
            "initiative" => $this->initiative,
            "speed" => $this->speed,
            "hitPoints" => $this->hitPoints,
            "deathSaves" => $this->deathSaves,
            "personalityTraits" => $this->personalityTraits,
            "ideals" => $this->ideals,
            "bonds" => $this->bonds,
            "flaws" => $this->flaws,
            "traits" => $this->featuresAndTraits,
            "proficiencies" => $this->otherProficiencies,
            "languages" => explode(',', $this->languages),
            "attacks" => $this->attacks,
            "spellSlots" => $this->spellSlots,
            "skills" => $this->skills,
            "spells" => $this->spells->toArray(),
            "attributes" => $this->attributes,
            "inventory" => $this->inventory,
            "savingThrows" => $this->savingThrows,
            "hitDice" => $this->hitDice
        ];
    }

}
