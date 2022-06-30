<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'member') {
            return redirect()->to('/login');
        }

        return view('member/home');
    }
    
}
