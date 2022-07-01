<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        //
        return view('member/profile');
    }
}
