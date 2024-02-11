<?php

namespace App\DTO;

class HitDiceDTO
{

    private int $total;
    private string $value;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function fromJson(array $hitDiceJson): HitDiceDTO
    {
        $hitDice = new HitDiceDTO();
        if (isset($hitDiceJson['total'])) {
            $hitDice->setTotal($hitDiceJson['total']);
        }
        if (isset($hitDiceJson['value'])) {
            $hitDice->setValue($hitDiceJson['value']);
        }
        return $hitDice;
    }

    public function toJson(): array
    {
        return [
            'total' => $this->getTotal(),
            'value' => $this->getValue(),
        ];
    }



}