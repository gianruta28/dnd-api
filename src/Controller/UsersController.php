<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\User\UserCreator;
use App\Services\User\UserFinder;
use App\Utils\JsonRequestBodyParserUtil;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{

    #[Route('/api/users/create', name: 'create_user', methods: ['POST'])]
    public function create(Request $request, UserCreator $userCreator): JsonResponse
    {

        $requestUser = $request->toArray();
        try {
            $userCreator->run($requestUser);
        }catch (BadRequestException $exception){
            return $this->json([
                'error' => 'username or email taken'
            ], 400);
        }

        return new JsonResponse([], 201 );
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



}