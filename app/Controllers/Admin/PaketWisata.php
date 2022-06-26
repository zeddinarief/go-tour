<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PaketWisata extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }
    
    public function test()
    {
        return view('admin/dashboard');
    }
}
