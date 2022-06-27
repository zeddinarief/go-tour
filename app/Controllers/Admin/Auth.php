<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if ($this->session->get('isLogin') == 'yes') {
            return redirect()->to('/admin/dashboard');
        }
        return view('admin/login');
    }
    
    public function login()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'role' => 'admin'
        ];

        $user = $this->userModel->getUser($data); // This will get user by username and role
        // $pass = password_hash('admingotour', PASSWORD_BCRYPT);
        // var_dump(password_hash('admingotour', PASSWORD_BCRYPT));
        // dd(password_verify('admingotour', '$2y$10$KKKy9/XNNE7.LcVaa6uOb.L.ddk3JQH/i1Cw2s1kaw8gSmvLStaxO'));
        
        if ($user == null || !password_verify($this->request->getVar('password'), $user['password'])) {
            return redirect()->to('/admin/login')->withInput()->with('error', 'Username or password wrong');
        }
        
        // Set user session
        $this->session->set('username', $user['username']);
        $this->session->set('isLogin', 'yes');
        $this->session->set('name', $user['nama']);
        $this->session->set('role', $user['role']);
        $this->session->set('isActive', $user['is_active']);

        return redirect()->to('admin/dashboard');
    }

    public function logout()
    {
        // Destroy the session
        session_destroy();
        return redirect()->to('/admin/login');
    }
}
