<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function roadmap(): string
    {
        return view('user/roadmap');
    }
  

}
