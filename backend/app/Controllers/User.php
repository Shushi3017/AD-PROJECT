<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function login(): string
    {
        return view('user/login');
    }
  

}
