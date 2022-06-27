<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Member extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        // Call userModel fuction
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // This function will show list of member

        if (!$this->session->get('isLogin') == 'yes') {
            return redirect()->to('admin/login');
        }

        $members = $this->userModel->getAllMember(); // Get all member list

        $data = [
            'menu' => 'member',
            'members' => $members
        ];

        return view('admin/list_member', $data);
    }
}
