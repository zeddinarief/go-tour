<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        // $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('admin/login');
    }
    
    public function login()
    {
        $data = [
            'username' => $this->request->getVar('username')
        ];

        $db = \Config\Database::connect();
        $user = $db->query("SELECT * FROM user");
        dd($user);

        dd($data);
        var_dump($this->userModel->getUserLogin($data));die;
        dd($this->userModel->getUserLogin($data));
        // dd($this->request->getVar());
        $pass = password_hash('admingotour', PASSWORD_BCRYPT);
        var_dump(password_hash('admingotour', PASSWORD_BCRYPT));
        dd(password_verify('admingotour', '$2y$10$KKKy9/XNNE7.LcVaa6uOb.L.ddk3JQH/i1Cw2s1kaw8gSmvLStaxO'));
        // $pass = password_verify()
        // if (!password_verify()) {
        //     # code...
        // }
        return view('admin/dashboard');
    }
}
