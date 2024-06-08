<?php

namespace App\DTO;

class SkillsDTO
{
    private SkillDTO $acrobatics;
    private SkillDTO $animal;
    private SkillDTO $arcana;
    private SkillDTO $athletics;
    private SkillDTO $deception;
    private SkillDTO $history;
    private SkillDTO $insight;
    private SkillDTO $intimidation;
    private SkillDTO $investigation;
    private SkillDTO $medicine;
    private SkillDTO $nature;
    private SkillDTO $perception;
    private SkillDTO $performance;
    private SkillDTO $persuasion;
    private SkillDTO $religion;
    private SkillDTO $sleightOfHand;
    private SkillDTO $stealth;
    private SkillDTO $survival;

    /**
     * @return SkillDTO
     */
    public function getAcrobatics(): SkillDTO
    {
        return $this->acrobatics;
    }

    /**
     * @param SkillDTO $acrobatics
     * @return SkillsDTO
     */
    public function setAcrobatics(SkillDTO $acrobatics): SkillsDTO
    {
        $this->acrobatics = $acrobatics;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getAnimal(): SkillDTO
    {
        return $this->animal;
    }

    /**
     * @param SkillDTO $animal
     * @return SkillsDTO
     */
    public function setAnimal(SkillDTO $animal): SkillsDTO
    {
        $this->animal = $animal;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getArcana(): SkillDTO
    {
        return $this->arcana;
    }

    /**
     * @param SkillDTO $arcana
     * @return SkillsDTO
     */
    public function setArcana(SkillDTO $arcana): SkillsDTO
    {
        $this->arcana = $arcana;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getAthletics(): SkillDTO
    {
        return $this->athletics;
    }

    /**
     * @param SkillDTO $athletics
     * @return SkillsDTO
     */
    public function setAthletics(SkillDTO $athletics): SkillsDTO
    {
        $this->athletics = $athletics;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getDeception(): SkillDTO
    {
        return $this->deception;
    }

    /**
     * @param SkillDTO $deception
     * @return SkillsDTO
     */
    public function setDeception(SkillDTO $deception): SkillsDTO
    {
        $this->deception = $deception;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getHistory(): SkillDTO
    {
        return $this->history;
    }

    /**
     * @param SkillDTO $history
     * @return SkillsDTO
     */
    public function setHistory(SkillDTO $history): SkillsDTO
    {
        $this->history = $history;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getInsight(): SkillDTO
    {
        return $this->insight;
    }

    /**
     * @param SkillDTO $insight
     * @return SkillsDTO
     */
    public function setInsight(SkillDTO $insight): SkillsDTO
    {
        $this->insight = $insight;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getIntimidation(): SkillDTO
    {
        return $this->intimidation;
    }

    /**
     * @param SkillDTO $intimidation
     * @return SkillsDTO
     */
    public function setIntimidation(SkillDTO $intimidation): SkillsDTO
    {
        $this->intimidation = $intimidation;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getInvestigation(): SkillDTO
    {
        return $this->investigation;
    }

    /**
     * @param SkillDTO $investigation
     * @return SkillsDTO
     */
    public function setInvestigation(SkillDTO $investigation): SkillsDTO
    {
        $this->investigation = $investigation;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getMedicine(): SkillDTO
    {
        return $this->medicine;
    }

    /**
     * @param SkillDTO $medicine
     * @return SkillsDTO
     */
    public function setMedicine(SkillDTO $medicine): SkillsDTO
    {
        $this->medicine = $medicine;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getNature(): SkillDTO
    {
        return $this->nature;
    }

    /**
     * @param SkillDTO $nature
     * @return SkillsDTO
     */
    public function setNature(SkillDTO $nature): SkillsDTO
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getPerception(): SkillDTO
    {
        return $this->perception;
    }

    /**
     * @param SkillDTO $perception
     * @return SkillsDTO
     */
    public function setPerception(SkillDTO $perception): SkillsDTO
    {
        $this->perception = $perception;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getPerformance(): SkillDTO
    {
        return $this->performance;
    }

    /**
     * @param SkillDTO $performance
     * @return SkillsDTO
     */
    public function setPerformance(SkillDTO $performance): SkillsDTO
    {
        $this->performance = $performance;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getPersuasion(): SkillDTO
    {
        return $this->persuasion;
    }

    /**
     * @param SkillDTO $persuasion
     * @return SkillsDTO
     */
    public function setPersuasion(SkillDTO $persuasion): SkillsDTO
    {
        $this->persuasion = $persuasion;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getReligion(): SkillDTO
    {
        return $this->religion;
    }

    /**
     * @param SkillDTO $religion
     * @return SkillsDTO
     */
    public function setReligion(SkillDTO $religion): SkillsDTO
    {
        $this->religion = $religion;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getSleightOfHand(): SkillDTO
    {
        return $this->sleightOfHand;
    }

    /**
     * @param SkillDTO $sleightOfHand
     * @return SkillsDTO
     */
    public function setSleightOfHand(SkillDTO $sleightOfHand): SkillsDTO
    {
        $this->sleightOfHand = $sleightOfHand;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getStealth(): SkillDTO
    {
        return $this->stealth;
    }

    /**
     * @param SkillDTO $stealth
     * @return SkillsDTO
     */
    public function setStealth(SkillDTO $stealth): SkillsDTO
    {
        $this->stealth = $stealth;
        return $this;
    }

    /**
     * @return SkillDTO
     */
    public function getSurvival(): SkillDTO
    {
        return $this->survival;
    }

    /**
     * @param SkillDTO $survival
     * @return SkillsDTO
     */
    public function setSurvival(SkillDTO $survival): SkillsDTO
    {
        $this->survival = $survival;
        return $this;
    }


    public function fromJson(array $skillsJson): SkillsDTO
    {
        foreach ($skillsJson as $skillName => $skillData){
            $skillDTO = new SkillDTO();
            $skillDTO->fromJson($skillData);
            $this->$skillName = $skillDTO;
        }
        return $this;
    }

    public function toJson(): array
    {
        return [
            'acrobatics' => $this->acrobatics->toJson(),
            'animal' => $this->animal->toJson(),
            'arcana' => $this->arcana->toJson(),
            'athletics' => $this->athletics->toJson(),
            'deception' => $this->deception->toJson(),
            'history' => $this->history->toJson(),
            'insight' => $this->insight->toJson(),
            'intimidation' => $this->intimidation->toJson(),
            'investigation' => $this->investigation->toJson(),
            'medicine' => $this->medicine->toJson(),
            'nature' => $this->nature->toJson(),
            'perception' => $this->perception->toJson(),
            'performance' => $this->performance->toJson(),
            'persuasion' => $this->persuasion->toJson(),
            'religion' => $this->religion->toJson(),
            'sleightOfHand' => $this->sleightOfHand->toJson(),
            'stealth' => $this->stealth->toJson(),
            'survival' => $this->survival->toJson(),
        ];
    }




}