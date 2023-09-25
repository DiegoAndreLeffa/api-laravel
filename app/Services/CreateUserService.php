<?php

namespace App\Services;

use App\Models\User;
use Error;

class CreateUserService
{
    public function execute(array $data)
    {

        $userFound = User::firstWhere('email', $data['email']);


        if (!is_null($userFound)) {

            return response()->json(['message' => 'Email já cadastrado'], 401);
        }

        $userFound = User::firstWhere('cpf', $data['cpf']);

        if (!is_null($userFound)) {

            return response()->json(['message' => 'Cpf já cadastrado'], 401);
        }

        return User::create($data);
    }
}
