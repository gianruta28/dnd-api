<?php

namespace App\DTO;

class AttributeDTO
{

    private int $base;
    private int $modifier;

    /**
     * @return int
     */
    public function getBase(): int
    {
        return $this->base;
    }

    /**
     * @param int $base
     */
    public function setBase(int $base): void
    {
        $this->base = $base;
    }

    /**
     * @return int
     */
    public function getModifier(): int
    {
        return $this->modifier;
    }

    /**
     * @param int $modifier
     */
    public function setModifier(int $modifier): void
    {
        $this->modifier = $modifier;
    }


    public function toJson(){
        return [
            'base' => $this->base,
            'modifier' => $this->modifier
        ];
    }

    public function fromJson($attribute){
        $attributeDTO = new AttributeDTO();
        $attributeDTO->setBase($attribute['base']);
        $attributeDTO->setModifier($attribute['modifier']);
        return $attributeDTO;
    }

}