<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function signup(): string
    {
        return view('user/signup');
    }
  

}
