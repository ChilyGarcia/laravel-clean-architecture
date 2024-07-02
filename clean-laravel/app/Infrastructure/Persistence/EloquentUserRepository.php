<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Repositories\UserRepositoryInterface;

use App\Domain\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAllUsers()
    {
        return $this->model->all();
    }
    public function getUserById($id)
    {
        return $this->model->find($id);
    }
}
