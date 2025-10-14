<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function moodboard(): string
    {
        return view('user/moodboard');
    }
  

}
