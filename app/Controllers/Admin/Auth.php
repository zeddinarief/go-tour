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
        if ($this->session->get('isLogin') == 'yes' && $this->session->get('role') == 'admin') {
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
