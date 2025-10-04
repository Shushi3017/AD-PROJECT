<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function landing(): string
    {
        return view('user/landing');
    }

    public function login()
    {
        return view('user/login');
    }

    public function signup(): string
    {
        return view('user/signup');
    }

    public function moodBoard(): string
    {
        return view('user/moodboard');
    }

    public function roadmap(): string
    {
        return view('user/roadmap');
    }

    // For checking components
    // public function component(): string
    // {
    //     return view('components/crud/crud');
    // }

}
