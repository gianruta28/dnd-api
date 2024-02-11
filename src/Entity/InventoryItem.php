<?php

namespace App\Entity;

use App\Repository\InventoryItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryItemRepository::class)]
class InventoryItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $itemType = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $damage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $attackBonus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $damageBonus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $armorClass = null;

    #[ORM\Column(nullable: true)]
    private ?bool $stealthDisadvantage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $effect = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $duration = null;

    #[ORM\Column]
    private ?bool $consumable = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    private ?Inventory $inventory = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    public function setItemType(string $itemType): static
    {
        $this->itemType = $itemType;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDamage(): ?string
    {
        return $this->damage;
    }

    public function setDamage(?string $damage): static
    {
        $this->damage = $damage;

        return $this;
    }

    public function getAttackBonus(): ?string
    {
        return $this->attackBonus;
    }

    public function setAttackBonus(?string $attackBonus): static
    {
        $this->attackBonus = $attackBonus;

        return $this;
    }

    public function getDamageBonus(): ?string
    {
        return $this->damageBonus;
    }

    public function setDamageBonus(?string $damageBonus): static
    {
        $this->damageBonus = $damageBonus;

        return $this;
    }

    public function getArmorClass(): ?string
    {
        return $this->armorClass;
    }

    public function setArmorClass(?string $armorClass): static
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    public function isStealthDisadvantage(): ?bool
    {
        return $this->stealthDisadvantage;
    }

    public function setStealthDisadvantage(?bool $stealthDisadvantage): static
    {
        $this->stealthDisadvantage = $stealthDisadvantage;

        return $this;
    }

    public function getEffect(): ?string
    {
        return $this->effect;
    }

    public function setEffect(?string $effect): static
    {
        $this->effect = $effect;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function isConsumable(): ?bool
    {
        return $this->consumable;
    }

    public function setConsumable(bool $consumable): static
    {
        $this->consumable = $consumable;

        return $this;
    }

    public function getInventory(): ?Inventory
    {
        return $this->inventory;
    }

    public function setInventory(?Inventory $inventory): static
    {
        $this->inventory = $inventory;

        return $this;
    }



}
