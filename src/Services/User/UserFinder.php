<?php

namespace App\Services\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFinder
{

    private UserRepository $userRepository;



    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function run(string $userId): array
    {
        $user = $this->userRepository->find($userId);
        
        if(!$user){
            throw new BadRequestException('Not found', 404);
        }

        return $this->parseUser($user);
    }
    
    private function parseUser(User $user): array
    {
        
        $userJson = [];
        $userJson['email'] = $user->getEmail();
        $userJson['username'] = $user->getUsername();
        $userJson['role'] = $user->getRole();
        $userJson['name'] = $user->getName();
        
        return $userJson;
        
    }


}