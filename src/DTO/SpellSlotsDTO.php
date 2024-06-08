<?php

namespace App\DTO;

class SpellSlotsDTO
{

    private int $level1;
    private int $level2;
    private int $level3;
    private int $level4;
    private int $level5;
    private int $level6;
    private int $level7;
    private int $level8;
    private int $level9;

    /**
     * @return int
     */
    public function getLevel1(): int
    {
        return $this->level1;
    }

    /**
     * @param int $level1
     */
    public function setLevel1(int $level1): void
    {
        $this->level1 = $level1;
    }

    /**
     * @return int
     */
    public function getLevel2(): int
    {
        return $this->level2;
    }

    /**
     * @param int $level2
     */
    public function setLevel2(int $level2): void
    {
        $this->level2 = $level2;
    }

    /**
     * @return int
     */
    public function getLevel3(): int
    {
        return $this->level3;
    }

    /**
     * @param int $level3
     */
    public function setLevel3(int $level3): void
    {
        $this->level3 = $level3;
    }

    /**
     * @return int
     */
    public function getLevel4(): int
    {
        return $this->level4;
    }

    /**
     * @param int $level4
     */
    public function setLevel4(int $level4): void
    {
        $this->level4 = $level4;
    }

    /**
     * @return int
     */
    public function getLevel5(): int
    {
        return $this->level5;
    }

    /**
     * @param int $level5
     */
    public function setLevel5(int $level5): void
    {
        $this->level5 = $level5;
    }

    /**
     * @return int
     */
    public function getLevel6(): int
    {
        return $this->level6;
    }

    /**
     * @param int $level6
     */
    public function setLevel6(int $level6): void
    {
        $this->level6 = $level6;
    }

    /**
     * @return int
     */
    public function getLevel7(): int
    {
        return $this->level7;
    }

    /**
     * @param int $level7
     */
    public function setLevel7(int $level7): void
    {
        $this->level7 = $level7;
    }

    /**
     * @return int
     */
    public function getLevel8(): int
    {
        return $this->level8;
    }

    /**
     * @param int $level8
     */
    public function setLevel8(int $level8): void
    {
        $this->level8 = $level8;
    }

    /**
     * @return int
     */
    public function getLevel9(): int
    {
        return $this->level9;
    }

    /**
     * @param int $level9
     */
    public function setLevel9(int $level9): void
    {
        $this->level9 = $level9;
    }

    public function fromJson(array $spellSlotsJson){

        $this->level1 = $spellSlotsJson['level1'];
        $this->level2 = $spellSlotsJson['level2'];
        $this->level3 = $spellSlotsJson['level3'];
        $this->level4 = $spellSlotsJson['level4'];
        $this->level5 = $spellSlotsJson['level5'];
        $this->level6 = $spellSlotsJson['level6'];
        $this->level7 = $spellSlotsJson['level7'];
        $this->level8 = $spellSlotsJson['level8'];
        $this->level9 = $spellSlotsJson['level9'];
        return $this;
    }

    public function toJson(){
        return [
            'level1' => $this->level1,
            'level2' => $this->level2,
            'level3' => $this->level3,
            'level4' => $this->level4,
            'level5' => $this->level5,
            'level6' => $this->level6,
            'level7' => $this->level7,
            'level8' => $this->level8,
            'level9' => $this->level9,
        ];
    }


}