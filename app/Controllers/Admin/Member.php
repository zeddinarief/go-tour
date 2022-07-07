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

        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $members = $this->userModel->getAllMember(); // Get all member list

        $data = [
            'menu' => 'member',
            'members' => $members
        ];

        return view('admin/member/list_member', $data);
    }

    public function detail($id)
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $member = $this->userModel->find($id);

        $data = [
            'menu' => 'member',
            'validation' => \Config\Services::validation(),
            'member' => $member
        ];

        return view('admin/member/detail_member', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => 'required',
            'email' => 'required|valid_email',
            'username' => [
                'rules' => 'required|is_unique[user.username,id,{id}]',
                'errors' => [
                    'is_unique' => 'The username already exist.'
                ]
            ]
        ])) {
            return redirect()->to('/admin/member/' . $id)->withInput();
        }

        $this->userModel->save($this->request->getPost());

        return redirect()->to('/admin/member/' . $id);
    }
}