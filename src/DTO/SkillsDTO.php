<?php

namespace App\DTO;

class SkillsDTO
{
    private int $acrobatics;
    private int $animal;
    private int $arcana;
    private int $athletics;
    private int $deception;
    private int $history;
    private int $insight;
    private int $intimidation;
    private int $investigation;
    private int $medicine;
    private int $nature;
    private int $perception;
    private int $performance;
    private int $persuasion;
    private int $religion;
    private int $sleightOfHand;
    private int $stealth;
    private int $survival;

    private array $proficiencies;

    /**
     * @return int
     */
    public function getAcrobatics(): int
    {
        return $this->acrobatics;
    }

    /**
     * @param int $acrobatics
     */
    public function setAcrobatics(int $acrobatics): void
    {
        $this->acrobatics = $acrobatics;
    }

    /**
     * @return int
     */
    public function getAnimal(): int
    {
        return $this->animal;
    }

    /**
     * @param int $animal
     */
    public function setAnimal(int $animal): void
    {
        $this->animal = $animal;
    }

    /**
     * @return int
     */
    public function getArcana(): int
    {
        return $this->arcana;
    }

    /**
     * @param int $arcana
     */
    public function setArcana(int $arcana): void
    {
        $this->arcana = $arcana;
    }

    /**
     * @return int
     */
    public function getAthletics(): int
    {
        return $this->athletics;
    }

    /**
     * @param int $athletics
     */
    public function setAthletics(int $athletics): void
    {
        $this->athletics = $athletics;
    }

    /**
     * @return int
     */
    public function getDeception(): int
    {
        return $this->deception;
    }

    /**
     * @param int $deception
     */
    public function setDeception(int $deception): void
    {
        $this->deception = $deception;
    }

    /**
     * @return int
     */
    public function getHistory(): int
    {
        return $this->history;
    }

    /**
     * @param int $history
     */
    public function setHistory(int $history): void
    {
        $this->history = $history;
    }

    /**
     * @return int
     */
    public function getInsight(): int
    {
        return $this->insight;
    }

    /**
     * @param int $insight
     */
    public function setInsight(int $insight): void
    {
        $this->insight = $insight;
    }

    /**
     * @return int
     */
    public function getIntimidation(): int
    {
        return $this->intimidation;
    }

    /**
     * @param int $intimidation
     */
    public function setIntimidation(int $intimidation): void
    {
        $this->intimidation = $intimidation;
    }

    /**
     * @return int
     */
    public function getInvestigation(): int
    {
        return $this->investigation;
    }

    /**
     * @param int $investigation
     */
    public function setInvestigation(int $investigation): void
    {
        $this->investigation = $investigation;
    }

    /**
     * @return int
     */
    public function getMedicine(): int
    {
        return $this->medicine;
    }

    /**
     * @param int $medicine
     */
    public function setMedicine(int $medicine): void
    {
        $this->medicine = $medicine;
    }

    /**
     * @return int
     */
    public function getNature(): int
    {
        return $this->nature;
    }

    /**
     * @param int $nature
     */
    public function setNature(int $nature): void
    {
        $this->nature = $nature;
    }

    /**
     * @return int
     */
    public function getPerception(): int
    {
        return $this->perception;
    }

    /**
     * @param int $perception
     */
    public function setPerception(int $perception): void
    {
        $this->perception = $perception;
    }

    /**
     * @return int
     */
    public function getPerformance(): int
    {
        return $this->performance;
    }

    /**
     * @param int $performance
     */
    public function setPerformance(int $performance): void
    {
        $this->performance = $performance;
    }

    /**
     * @return int
     */
    public function getPersuasion(): int
    {
        return $this->persuasion;
    }

    /**
     * @param int $persuasion
     */
    public function setPersuasion(int $persuasion): void
    {
        $this->persuasion = $persuasion;
    }

    /**
     * @return int
     */
    public function getReligion(): int
    {
        return $this->religion;
    }

    /**
     * @param int $religion
     */
    public function setReligion(int $religion): void
    {
        $this->religion = $religion;
    }

    /**
     * @return int
     */
    public function getSleightOfHand(): int
    {
        return $this->sleightOfHand;
    }

    /**
     * @param int $sleightOfHand
     */
    public function setSleightOfHand(int $sleightOfHand): void
    {
        $this->sleightOfHand = $sleightOfHand;
    }

    /**
     * @return int
     */
    public function getStealth(): int
    {
        return $this->stealth;
    }

    /**
     * @param int $stealth
     */
    public function setStealth(int $stealth): void
    {
        $this->stealth = $stealth;
    }

    /**
     * @return int
     */
    public function getSurvival(): int
    {
        return $this->survival;
    }

    /**
     * @param int $survival
     */
    public function setSurvival(int $survival): void
    {
        $this->survival = $survival;
    }

    /**
     * @return array
     */
    public function getProficiencies(): array
    {
        return $this->proficiencies;
    }

    /**
     * @param array $proficiencies
     */
    public function setProficiencies(array $proficiencies): void
    {
        $this->proficiencies = $proficiencies;
    }
    public function fromJson(array $skillsJson): SkillsDTO
    {
        $skills = new SkillsDTO();
        foreach ($skillsJson as $skill => $value) {
            if (property_exists($this, $skill)) {
                $this->$skill = $value;
            }
        }
        return $this;
    }

    public function toJson(): array
    {
        return [
            'acrobatics' => $this->acrobatics,
            'animal' => $this->animal,
            'arcana' => $this->arcana,
            'athletics' => $this->athletics,
            'deception' => $this->deception,
            'history' => $this->history,
            'insight' => $this->insight,
            'intimidation' => $this->intimidation,
            'investigation' => $this->investigation,
            'medicine' => $this->medicine,
            'nature' => $this->nature,
            'perception' => $this->perception,
            'performance' => $this->performance,
            'persuasion' => $this->persuasion,
            'religion' => $this->religion,
            'sleightOfHand' => $this->sleightOfHand,
            'stealth' => $this->stealth,
            'survival' => $this->survival,
            'proficiencies' => $this->proficiencies,
        ];
    }




}