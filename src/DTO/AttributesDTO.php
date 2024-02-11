<?php

namespace App\DTO;

class AttributesDTO
{
    private int $strength;
    private int $dexterity;
    private int $constitution;
    private int $intelligence;
    private int $wisdom;
    private int $charisma;
    private int $strengthBase;
    private int $dexterityBase;
    private int $constitutionBase;
    private int $intelligenceBase;
    private int $wisdomBase;
    private int $charismaBase;

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

    /**
     * @return int
     */
    public function getStrengthBase(): int
    {
        return $this->strengthBase;
    }

    /**
     * @param int $strengthBase
     */
    public function setStrengthBase(int $strengthBase): void
    {
        $this->strengthBase = $strengthBase;
    }

    /**
     * @return int
     */
    public function getDexterityBase(): int
    {
        return $this->dexterityBase;
    }

    /**
     * @param int $dexterityBase
     */
    public function setDexterityBase(int $dexterityBase): void
    {
        $this->dexterityBase = $dexterityBase;
    }

    /**
     * @return int
     */
    public function getConstitutionBase(): int
    {
        return $this->constitutionBase;
    }

    /**
     * @param int $constitutionBase
     */
    public function setConstitutionBase(int $constitutionBase): void
    {
        $this->constitutionBase = $constitutionBase;
    }

    /**
     * @return int
     */
    public function getIntelligenceBase(): int
    {
        return $this->intelligenceBase;
    }

    /**
     * @param int $intelligenceBase
     */
    public function setIntelligenceBase(int $intelligenceBase): void
    {
        $this->intelligenceBase = $intelligenceBase;
    }

    /**
     * @return int
     */
    public function getWisdomBase(): int
    {
        return $this->wisdomBase;
    }

    /**
     * @param int $wisdomBase
     */
    public function setWisdomBase(int $wisdomBase): void
    {
        $this->wisdomBase = $wisdomBase;
    }

    /**
     * @return int
     */
    public function getCharismaBase(): int
    {
        return $this->charismaBase;
    }

    /**
     * @param int $charismaBase
     */
    public function setCharismaBase(int $charismaBase): void
    {
        $this->charismaBase = $charismaBase;
    }



}