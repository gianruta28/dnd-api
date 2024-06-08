<?php

namespace App\Services\Character;


use App\Entity\User;
use App\Repository\CharacterRepository;

class CharactersFinder
{
    private CharacterRepository $characterRepository;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    public function run(User $user){
        $charactersEntities = $this->characterRepository->findBy(['user' => $user]);
        $characters = [];
        foreach ($charactersEntities as $characterEntity){
            $characters[] = $characterEntity->toJson();
        }
        return $characters;
    }



}