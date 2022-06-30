<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        return view('member/pesanan');
    }
}
