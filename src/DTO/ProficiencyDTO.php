<?php

namespace App\DTO;

class ProficiencyDTO
{
    private string $name;
    private array $items = [];

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
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function fromJson(array $proficiency){
        $this->name = $proficiency['name'];
        foreach ($proficiency['items'] as $proficiencyItem){
            array_push($this->items, $proficiencyItem);
        }
        return $this;
    }

    public function toJson(){
        return [
            'name'=> $this->name,
            'items' => $this->items
        ];
    }

}