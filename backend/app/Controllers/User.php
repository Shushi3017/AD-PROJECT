<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function moodboard(): string
    {
        return view('user/moodboard');
    }
    // public function btn2(): string
    // {
    //     return view('user/btn3');
    // }
    // public function btn3(): string
    // {
    //     return view('user/btn3');
    // }
    // public function btn4(): string
    // {
    //     return view('user/btn4');
    // }

    
    

    // For checking components
    // public function component(): string
    // {
    //     return view('components/crud/crud');
    // }

}
