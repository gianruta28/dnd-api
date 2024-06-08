<?php

namespace App\DTO;

class AttributesDTO
{
    private AttributeDTO $strength;
    private AttributeDTO $dexterity;
    private AttributeDTO $constitution;
    private AttributeDTO $intelligence;
    private AttributeDTO $wisdom;
    private AttributeDTO $charisma;

    /**
     * @return AttributeDTO
     */
    public function getStrength(): AttributeDTO
    {
        return $this->strength;
    }

    /**
     * @param AttributeDTO $strength
     */
    public function setStrength(AttributeDTO $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return AttributeDTO
     */
    public function getDexterity(): AttributeDTO
    {
        return $this->dexterity;
    }

    /**
     * @param AttributeDTO $dexterity
     */
    public function setDexterity(AttributeDTO $dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * @return AttributeDTO
     */
    public function getConstitution(): AttributeDTO
    {
        return $this->constitution;
    }

    /**
     * @param AttributeDTO $constitution
     */
    public function setConstitution(AttributeDTO $constitution): void
    {
        $this->constitution = $constitution;
    }

    /**
     * @return AttributeDTO
     */
    public function getIntelligence(): AttributeDTO
    {
        return $this->intelligence;
    }

    /**
     * @param AttributeDTO $intelligence
     */
    public function setIntelligence(AttributeDTO $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return AttributeDTO
     */
    public function getWisdom(): AttributeDTO
    {
        return $this->wisdom;
    }

    /**
     * @param AttributeDTO $wisdom
     */
    public function setWisdom(AttributeDTO $wisdom): void
    {
        $this->wisdom = $wisdom;
    }

    /**
     * @return AttributeDTO
     */
    public function getCharisma(): AttributeDTO
    {
        return $this->charisma;
    }

    /**
     * @param AttributeDTO $charisma
     */
    public function setCharisma(AttributeDTO $charisma): void
    {
        $this->charisma = $charisma;
    }

    public function fromJson($attributes): AttributesDTO
    {
        $attributesArray = [];
        foreach ($attributes as $key => $value){
            $attribute = new AttributeDTO();
            $attributesArray[$key] = $attribute->fromJson($value);;
        }
        
        $this->setWisdom($attributesArray['wisdom']);
        $this->setStrength($attributesArray['strength']);
        $this->setIntelligence($attributesArray['intelligence']);
        $this->setDexterity($attributesArray['dexterity']);
        $this->setCharisma($attributesArray['charisma']);
        $this->setConstitution($attributesArray['constitution']);

        return $this;
    }

    public function toJson(): array
    {
        $attributesArray = [];

        $attributesArray['wisdom'] = $this->getWisdom()->toJson();
        $attributesArray['strength'] = $this->getStrength()->toJson();
        $attributesArray['dexterity'] = $this->getDexterity()->toJson();
        $attributesArray['intelligence'] = $this->getIntelligence()->toJson();
        $attributesArray['charisma'] = $this->getCharisma()->toJson();
        $attributesArray['constitution'] = $this->getConstitution()->toJson();

        return $attributesArray;
    }

}