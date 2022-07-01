<?php

namespace App\Controllers\Member;

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
        if ($this->session->get('isLogin') == 'yes' && $this->session->get('role') == 'member') {
            return redirect()->to('/');
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('member/login', $data);
    }
    
    public function login()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'role' => 'member'
        ];

        $user = $this->userModel->getUser($data); // This will get user by username and role
        // $pass = password_hash('admingotour', PASSWORD_BCRYPT);
        // var_dump(password_hash('admingotour', PASSWORD_BCRYPT));
        // dd(password_verify('admingotour', '$2y$10$KKKy9/XNNE7.LcVaa6uOb.L.ddk3JQH/i1Cw2s1kaw8gSmvLStaxO'));
        
        if ($user == null || !password_verify($this->request->getVar('password'), $user['password'])) {
            return redirect()->to('/login')->withInput()->with('loginError', 'Username or password wrong');
        }
        
        // Set user session
        $this->setUserSession($user);

        return redirect()->to('/');
    }

    public function logout()
    {
        // Destroy the session
        session_destroy();
        return redirect()->to('/login');
    }

    // Register section
    public function save() // Save new member data
    {
        if (!$this->validate([
            'new_email' => 'required',
            'new_username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'is_unique' => 'The username already exist'
                ]
            ],
            'new_password' => 'required',
            'new_password_matches' => [
                'rules' => 'required|matches[new_password]',
                'errors' => [
                    'matches' => 'The password confirmation not match'
                ]
            ]
        ])) {
            
            return redirect()->to('/login')->withInput();
        }

        $this->userModel->save([
            'username' => $this->request->getVar('new_username'),
            'nama' => $this->request->getVar('new_nama'),
            'email' => $this->request->getVar('new_email'),
            'password' => password_hash($this->request->getVar('new_password'), PASSWORD_BCRYPT),
            'alamat' => $this->request->getVar('new_alamat'),
            'no_hp' => $this->request->getVar('new_nohp'),
            'role' => 'member'
        ]);

        $data = [
            'username' => $this->request->getVar('new_username'),
            'role' => 'member'
        ];

        $user = $this->userModel->getUser($data);

        // Set user session
        $this->setUserSession($user);

        return redirect()->to('/');
    }

    function setUserSession($user)
    {
        $this->session->set('username', $user['username']);
        $this->session->set('isLogin', 'yes');
        $this->session->set('name', $user['nama']);
        $this->session->set('role', $user['role']);
        $this->session->set('isActive', $user['is_active']);
    }
}
