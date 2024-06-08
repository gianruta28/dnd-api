<?php

namespace App\Services\Character;

use App\DTO\AttributeDTO;
use App\DTO\AttributesDTO;
use App\DTO\DeathSavesDTO;
use App\DTO\HitDiceDTO;
use App\DTO\HitPointsDTO;
use App\DTO\ProficiencyDTO;
use App\DTO\SavingThrowsDTO;
use App\DTO\SkillsDTO;
use App\DTO\SpellSlotsDTO;
use App\DTO\TraitDTO;
use App\Entity\Character;
use App\Entity\User;
use App\Repository\CharacterRepository;
use App\Repository\UserRepository;

class CharacterCreator
{
    private CharacterRepository $characterRepository;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    public function run(array $characterData, User $user){

        $newCharacter = new Character();
        $newCharacter
            ->setName($characterData['name'])
            ->setAlignment($characterData['alignment'])
            ->setArmorClass($characterData['armorClass'])
            ->setBonds($characterData['bonds'])
            ->setBackground($characterData['background'])
            ->setClass($characterData['class'])
            ->setExperiencePoints($characterData['experiencePoints'])
            ->setFlaws($characterData['flaws'])
            ->setIdeals($characterData['ideals'])
            ->setLevel($characterData['level'])
            ->setRace($characterData['race'])
            ->setPersonalityTraits($characterData['personalityTraits'])
            ->setInitiative($characterData['initiative'])
            ->setSpeed($characterData['speed'])
            ->setInspiration($characterData['inspiration'])
            ->setProficiencyBonus($characterData['proficiencyBonus'])
            ->setLanguages(implode(',', $characterData['languages']));

        $attributesDto = new AttributesDTO();
        $newCharacter->setAttributes($attributesDto->fromJson($characterData['attributes']));

        $savingThrowsDto = new SavingThrowsDTO();
        $newCharacter->setSavingThrows($savingThrowsDto->fromJson($characterData['savingThrows']));

        $hitPointsDTO = new HitPointsDTO();
        $newCharacter->setHitPoints($hitPointsDTO->fromJson($characterData['hitPoints']));

        $hitDiceDTO = new HitDiceDTO();
        $newCharacter->setHitDice($hitDiceDTO->fromJson($characterData['hitDice']));

        $spellSlotsDTO = new SpellSlotsDTO();
        $newCharacter->setSpellSlots($spellSlotsDTO->fromJson($characterData['spellSlots']));

        $traits = [];
        foreach ($characterData['traits'] as $trait){
            $traitDTO = new TraitDTO();
            $traits[] = $traitDTO->fromJson($trait);
        }
        $newCharacter->setFeaturesAndTraits($traits);

        $proficiencies = [];
        foreach ($characterData['proficiencies'] as $proficiency){
            $proficiencyDTO = new ProficiencyDTO();
            $proficiencies[] = $proficiencyDTO->fromJson($proficiency);
        }
        $newCharacter->setOtherProficiencies($proficiencies);


        $skillsDTO = new SkillsDTO();
        $newCharacter->setSkills($skillsDTO->fromJson($characterData['skills']));
        $deathSeavesDTO = $this->buildDeathSavesDTO();

        $newCharacter->setDeathSaves($deathSeavesDTO);


        $newCharacter->setUser($user);
        $this->characterRepository->saveCharacter($newCharacter);

    }


    private function buildDeathSavesDTO() {
        $deathSaves = new DeathSavesDTO();
        $deathSaves->setSuccess(0);
        $deathSaves->setFailure(0);

        return $deathSaves;
    }



}