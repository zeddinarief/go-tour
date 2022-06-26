<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!$this->session->get('isLogin') == 'yes') {
            return redirect()->to('admin/login');
        }
        return view('admin/dashboard');
    }
    
}
