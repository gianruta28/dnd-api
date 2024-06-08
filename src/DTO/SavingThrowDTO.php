<?php

namespace App\DTO;

class SavingThrowDTO
{
    private int $value;
    private bool $proficient;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return SavingThrowDTO
     */
    public function setValue(int $value): SavingThrowDTO
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isProficient(): bool
    {
        return $this->proficient;
    }

    /**
     * @param bool $proficient
     * @return SavingThrowDTO
     */
    public function setProficient(bool $proficient): SavingThrowDTO
    {
        $this->proficient = $proficient;
        return $this;
    }

    public function fromJson(array $attributeJson): static
    {
        $this->value= $attributeJson['value'];
        $this->proficient= $attributeJson['proficient'];

        return $this;
    }
    public function toJson(): array
    {
        return [
            'value' => $this->value,
            'proficient' => $this->proficient,
        ];
    }

}