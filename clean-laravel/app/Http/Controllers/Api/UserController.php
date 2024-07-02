<?php

namespace App\Http\Controllers\Api;

use App\Application\UseCases\UserUseCase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userUseCase;

    public function __construct(UserUseCase $userUseCase)
    {
        $this->userUseCase = $userUseCase;
    }

    public function index(){
        return $this->userUseCase->getAllUsers();
    }
}
