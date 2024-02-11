<?php

namespace App\DTO;

class SavingThrowsDTO
{

    private int $strength;
    private int $dexterity;
    private int $constitution;
    private int $intelligence;
    private int $wisdom;
    private int $charisma;

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    /**
     * @param int $dexterity
     */
    public function setDexterity(int $dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * @return int
     */
    public function getConstitution(): int
    {
        return $this->constitution;
    }

    /**
     * @param int $constitution
     */
    public function setConstitution(int $constitution): void
    {
        $this->constitution = $constitution;
    }

    /**
     * @return int
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return int
     */
    public function getWisdom(): int
    {
        return $this->wisdom;
    }

    /**
     * @param int $wisdom
     */
    public function setWisdom(int $wisdom): void
    {
        $this->wisdom = $wisdom;
    }

    /**
     * @return int
     */
    public function getCharisma(): int
    {
        return $this->charisma;
    }

    /**
     * @param int $charisma
     */
    public function setCharisma(int $charisma): void
    {
        $this->charisma = $charisma;
    }

    public function fromJson(array $savingThrowsJson): SavingThrowsDTO
    {
        $savingThrows = new SavingThrowsDTO();
        foreach ($savingThrowsJson as $throw => $value) {
            if (property_exists($this, $throw)) {
                $this->$throw = $value;
            }
        }
        return $this;
    }

    public function toJson(): array
    {
        return [
            'strength' => $this->strength,
            'dexterity' => $this->dexterity,
            'constitution' => $this->constitution,
            'intelligence' => $this->intelligence,
            'wisdom' => $this->wisdom,
            'charisma' => $this->charisma,
        ];
    }

}