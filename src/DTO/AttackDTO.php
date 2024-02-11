<?php

namespace App\DTO;

class AttackDTO
{
    private string $name;
    private string $damage;
    private string $damageType;
    private int $damageBonus;
    private int $attackBonus;
    private string $type;
    private string $description;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDamage(): string
    {
        return $this->damage;
    }

    /**
     * @param string $damage
     */
    public function setDamage(string $damage): void
    {
        $this->damage = $damage;
    }

    /**
     * @return string
     */
    public function getDamageType(): string
    {
        return $this->damageType;
    }

    /**
     * @param string $damageType
     */
    public function setDamageType(string $damageType): void
    {
        $this->damageType = $damageType;
    }

    /**
     * @return int
     */
    public function getDamageBonus(): int
    {
        return $this->damageBonus;
    }

    /**
     * @param int $damageBonus
     */
    public function setDamageBonus(int $damageBonus): void
    {
        $this->damageBonus = $damageBonus;
    }

    /**
     * @return int
     */
    public function getAttackBonus(): int
    {
        return $this->attackBonus;
    }

    /**
     * @param int $attackBonus
     */
    public function setAttackBonus(int $attackBonus): void
    {
        $this->attackBonus = $attackBonus;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function fromJson(array $attackJson): AttackDTO
    {
        $attack = new AttackDTO();
        $attack->setName($attackJson['name'] ?? '');
        $attack->setDamage($attackJson['damage'] ?? '');
        $attack->setDamageType($attackJson['damageType'] ?? '');
        $attack->setDamageBonus($attackJson['damageBonus'] ?? 0);
        $attack->setAttackBonus($attackJson['attackBonus'] ?? 0);
        $attack->setType($attackJson['type'] ?? '');
        $attack->setDescription($attackJson['description'] ?? '');
        return $attack;
    }

    public function toJson(): array
    {
        return [
            'name' => $this->getName(),
            'damage' => $this->getDamage(),
            'damageType' => $this->getDamageType(),
            'damageBonus' => $this->getDamageBonus(),
            'attackBonus' => $this->getAttackBonus(),
            'type' => $this->getType(),
            'description' => $this->getDescription(),
        ];
    }

}