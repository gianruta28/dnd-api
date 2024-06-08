<?php

namespace App\DTO;

class SavingThrowsDTO
{

    private SavingThrowDTO $strength;
    private SavingThrowDTO $dexterity;
    private SavingThrowDTO $constitution;
    private SavingThrowDTO $intelligence;
    private SavingThrowDTO $wisdom;
    private SavingThrowDTO $charisma;

    /**
     * @return SavingThrowDTO
     */
    public function getStrength(): SavingThrowDTO
    {
        return $this->strength;
    }

    /**
     * @param SavingThrowDTO $strength
     */
    public function setStrength(SavingThrowDTO $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return SavingThrowDTO
     */
    public function getDexterity(): SavingThrowDTO
    {
        return $this->dexterity;
    }

    /**
     * @param SavingThrowDTO $dexterity
     */
    public function setDexterity(SavingThrowDTO $dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * @return SavingThrowDTO
     */
    public function getConstitution(): SavingThrowDTO
    {
        return $this->constitution;
    }

    /**
     * @param SavingThrowDTO $constitution
     */
    public function setConstitution(SavingThrowDTO $constitution): void
    {
        $this->constitution = $constitution;
    }

    /**
     * @return SavingThrowDTO
     */
    public function getIntelligence(): SavingThrowDTO
    {
        return $this->intelligence;
    }

    /**
     * @param SavingThrowDTO $intelligence
     */
    public function setIntelligence(SavingThrowDTO $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return SavingThrowDTO
     */
    public function getWisdom(): SavingThrowDTO
    {
        return $this->wisdom;
    }

    /**
     * @param SavingThrowDTO $wisdom
     */
    public function setWisdom(SavingThrowDTO $wisdom): void
    {
        $this->wisdom = $wisdom;
    }

    /**
     * @return SavingThrowDTO
     */
    public function getCharisma(): SavingThrowDTO
    {
        return $this->charisma;
    }

    /**
     * @param SavingThrowDTO $charisma
     */
    public function setCharisma(SavingThrowDTO $charisma): void
    {
        $this->charisma = $charisma;
    }

    public function fromJson(array $savingThrowsJson): SavingThrowsDTO
    {
        foreach ($savingThrowsJson as $key => $throwValue) {
            $savingThrowDTO = new SavingThrowDTO();
            $savingThrowDTO->fromJson($throwValue);
            $this->$key = $savingThrowDTO;
        }
        return $this;
    }

    public function toJson(): array
    {
        return [
            'strength' => $this->strength->toJson(),
            'dexterity' => $this->dexterity->toJson(),
            'constitution' => $this->constitution->toJson(),
            'intelligence' => $this->intelligence->toJson(),
            'wisdom' => $this->wisdom->toJson(),
            'charisma' => $this->charisma->toJson(),
        ];
    }

}