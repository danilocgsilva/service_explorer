<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    /**
     * Repostiory method to create a user
     *
     * @param string $email
     * @param string $password
     * 
     * @return User
     */
    public function createUser(string $email, string $password)
    {
        return User::create([
            'email' => $email,
            'password' => bcrypt($password)
        ]);
    }
}
