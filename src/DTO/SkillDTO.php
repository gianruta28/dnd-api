<?php

namespace App\DTO;

class SkillDTO
{
    private int $bonus;
    private bool $proficient;


    /**
     * @return int
     */
    public function getBonus(): int
    {
        return $this->bonus;
    }

    /**
     * @param int $bonus
     */
    public function setBonus(int $bonus): void
    {
        $this->bonus = $bonus;
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
     */
    public function setProficient(bool $proficient): void
    {
        $this->proficient = $proficient;
    }

    public function fromJson(array $skill){
        $this->bonus = $skill['bonus'];
        $this->proficient = $skill['proficient'];
        return $this;
    }

    public function toJson(){
        return [
            'bonus'=>$this->bonus,
            'proficient'=>$this->proficient,
        ];
    }

}