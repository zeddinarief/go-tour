<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;

class PaketWisata extends BaseController
{
    public function index()
    {
        return view('member/wisata');
    }

    public function detail()
    {
        return view('member/detail_wisata');
    }
}
