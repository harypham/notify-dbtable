<?php

namespace App\Http\Controllers;

use App\User;
use App\Notifications\UserCreated;

class UserController extends Controller
{
    public function test()
    {
        $user = User::findOrFail(1);
        $user->notify(new UserCreated($user));
        return "test notify";
    }
}
