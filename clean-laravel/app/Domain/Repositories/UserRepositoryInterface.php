<?php

namespace App\Domain\Repositories;

interface UserRepositoryInterface
{
    public function getAllUsers();
    public function getUserById($id);
}
