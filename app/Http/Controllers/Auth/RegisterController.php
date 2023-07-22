<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use App\Services\UserService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(StoreUserRequest $request, UserService $userService): UserResource
    {
        $user = $userService->store($request->validated());

        // $user->notify(new WelcomeEmailNotification());

        return new UserResource($user);
    }
}
