<?php

namespace App\Controller;

use App\Entity\Character;
use App\Entity\User;
use App\Services\Character\CharacterCreator;
use App\Services\Character\CharacterEditor;
use App\Services\Character\CharactersFinder;
use App\Services\User\UserFinderByEmail;
use App\Utils\AccessTokenCreator;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class CharacterController extends AbstractController
{


    #[Route('/api/characters', name: 'create_character', methods: ['POST'])]
    public function create(Request $request, #[CurrentUser] ?User $user, CharacterCreator $characterCreator): JsonResponse
    {

        $characterData = $request->toArray();
        $characterCreator->run($characterData, $user);
        return $this->json($characterData, 201);

    }
    #[Route('/api/characters', name: 'find_characters', methods: ['GET'])]
    public function findAll(Request $request, TokenStorageInterface $tokenStorageInterface, JWTTokenManagerInterface $jwtManager, UserFinderByEmail $userFinderByEmail, CharactersFinder $charactersFinder): JsonResponse
    {

        $decodedJwtToken = $jwtManager->decode($tokenStorageInterface->getToken());
        $user = $userFinderByEmail->runEntity($decodedJwtToken['email']);
        $characters = $charactersFinder->run($user);
        return $this->json([
            "count" => 1,
            "totalCount" => 50,
            "page" => 1,
            "data" => $characters
        ], 201);

    }
    #[Route('/api/characters/{id}', name: 'find_character', methods: ['GET'])]
    public function findOne(Character $character, Request $request): JsonResponse
    {
        
        return $this->json($character->toJson(), 201);

    }

    #[Route('/api/characters/{id}', name: 'create_update', methods: ['PUT'])]
    public function edit(Character $character, Request $request, #[CurrentUser] ?User $user, CharacterEditor $characterEditor): JsonResponse
    {

        $characterData = $request->toArray();
        $characterEditor->run($characterData, $character, $user);
        return $this->json($characterData, 201);

    }


}