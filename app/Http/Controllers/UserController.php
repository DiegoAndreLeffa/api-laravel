<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\CreateUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $createUserService = new CreateUserService();

        return $createUserService->execute($request->all());
    }
}
