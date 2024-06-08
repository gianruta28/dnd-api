<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\User\UserCreator;
use App\Services\User\UserFinder;
use App\Services\User\UserFinderByEmail;
use App\Utils\JsonRequestBodyParserUtil;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class UsersController extends AbstractController
{

    public function __construct(TokenStorageInterface $tokenStorageInterface, JWTTokenManagerInterface $jwtManager)
    {
        $this->jwtManager = $jwtManager;
        $this->tokenStorageInterface = $tokenStorageInterface;
    }

    #[Route('/api/users/create', name: 'create_user', methods: ['POST'])]
    public function create(Request $request, UserCreator $userCreator): JsonResponse
    {

        $requestUser = $request->toArray();
        try {
            $user = $userCreator->run($requestUser);
            return new JsonResponse($user->toJson(), 201 );
        }catch (BadRequestException $exception){
            return $this->json([
                'error' => 'username or email taken'
            ], 400);
        }

    }
    #[Route('/api/users/{id}', name: 'find_user_by_id', methods: ['GET'])]
    public function get(Request $request, UserFinder $userFinder): JsonResponse
    {

        $userId = $request->get('id');
        try {
            $user = $userFinder->run($userId);
        }catch (BadRequestException $exception){
            return $this->json([
                'error' => 'not found'
            ], 404);
        }

        return new JsonResponse($user, 201 );
    }

    #[Route('/api/user', name: 'find_user_from_token', methods: ['GET'])]
    public function getFromToken(TokenStorageInterface $tokenStorageInterface, JWTTokenManagerInterface $jwtManager, UserFinderByEmail $userFinderByEmail): JsonResponse
    {
        $decodedJwtToken = $this->jwtManager->decode($this->tokenStorageInterface->getToken());
        $user = $userFinderByEmail->run($decodedJwtToken['email']);

        return new JsonResponse($user, 201 );
    }



}