<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('member/home');
    }
    
    public function test()
    {
        return view('admin/dashboard');
    }
}
