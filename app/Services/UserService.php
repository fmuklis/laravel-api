<?php

declare(strict_types=1);

namespace App\Services;

use App\Events\UserRegisterEvent;
use App\Models\User;

class UserService
{
    public function store(array $userDetails): User
    {
        $user = User::create([
            'name' => $userDetails['name'],
            'email' => $userDetails['email'],
            'password' => bcrypt($userDetails['password']),
        ]);

        UserRegisterEvent::dispatch($user);

        return $user;
    }
}
