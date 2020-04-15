<?php

namespace App\Http\Controllers;

use App\User;

class ProfilesController extends Controller
{

    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
