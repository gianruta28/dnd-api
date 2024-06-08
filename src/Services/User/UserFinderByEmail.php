<?php

namespace App\Services\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFinderByEmail
{

    private UserRepository $userRepository;



    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function run(string $userEmail): array
    {
        $user = $this->userRepository->findOneBy(['email' => $userEmail]);
        
        if(!$user){
            throw new BadRequestException('Not found', 404);
        }

        return $this->parseUser($user);
    }

    public function runEntity(string $userEmail): User
    {
        $user = $this->userRepository->findOneBy(['email' => $userEmail]);

        if(!$user){
            throw new BadRequestException('Not found', 404);
        }

        return $user;
    }
    
    private function parseUser(User $user): array
    {
        
        $userJson = [];
        $userJson['email'] = $user->getEmail();
        $userJson['username'] = $user->getUsername();
        $userJson['role'] = $user->getRole();
        $userJson['name'] = $user->getName();
        $userJson['id'] = $user->getId();
        
        return $userJson;
        
    }


}