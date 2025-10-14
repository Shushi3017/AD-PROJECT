<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function roadmap(): string
    {
        return view('user/roadmap');
    }
    public function landing(): string
    {
        return view('user/landing');
    }
    public function moodboard(): string
    {
        return view('user/moodboard');
    }
    
     public function signup(): string
     {
         return view('user/signup');
     }
     public function login(): string
     {
         return view('user/loginpage');
     }
     

    
    

    // For checking components
    // public function component(): string
    // {
    //     return view('components/crud/crud');
    // }

}
