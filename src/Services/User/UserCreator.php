<?php

namespace App\Services\User;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCreator
{

    private UserPasswordHasherInterface $passwordHasher;
    private UserRepository $userRepository;



    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }

    public function run(array $userData): void {

        $userUsingUsername = $this->userRepository->findOneBy(['username' => $userData['username']]);

        if($userUsingUsername){
            throw new BadRequestException('Username already in use', 400);
        }

        $userUsingEmail = $this->userRepository->findOneBy(['email' => $userData['email']]);

        if($userUsingEmail){
            throw new BadRequestException('email already in use', 400);
        }

        $user = new User();
        $user
            ->setName($userData['name'])
            ->setEmail($userData['email'])
            ->setRole($userData['role'])
            ->setUsername($userData['username']);

        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            $userData['password']
        );
        $user->setPassword($hashedPassword);

        $this->userRepository->createUser($user);

    }


}