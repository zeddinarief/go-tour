<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // This function will show dashboard page
        
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') { // Check is user logged in
            return redirect()->to('admin/login');
        }

        $data = [
            'menu' => 'dashboard'
        ];

        return view('admin/dashboard', $data);
    }
    
}
