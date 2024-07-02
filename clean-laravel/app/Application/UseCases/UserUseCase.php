<?php

namespace App\Application\UseCases;

use App\Domain\Repositories\UserRepositoryInterface;

class UserUseCase
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }
}
