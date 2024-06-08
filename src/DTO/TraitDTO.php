<?php

namespace App\DTO;

class TraitDTO
{
    private string $name;
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

    public function fromJson(array $trait){
        $this->name = $trait['name'];
        $this->description = $trait['description'];
        return $this;
    }

    public function toJson(){
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }

}