<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('member/home');
    }
    
}
