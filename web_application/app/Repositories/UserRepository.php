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
        if (User::where(['email' => $email])->exists()) {
            throw new RepositoryException("Already exists a user with the e-mail provided to create a new user. E-mails must not repeat in the records data.");
        }

        return User::create([
            'email' => $email,
            'password' => bcrypt($password)
        ]);
    }
}
