<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\PesananModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{

    use ResponseTrait;
    protected $userModel;
    protected $pesananModel;
    protected $pembayaranModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        // Show profile data of member
        $pesanan = $this->pesananModel->getPesananByUser($this->session->get('user_id'));
        $history = $this->pembayaranModel->getRiwayatPembayaran($this->session->get('user_id'));
        $user = $this->userModel->find($this->session->get('user_id'));
        
        $data = [
            'member' => $user,
            'pesanan' => $pesanan,
            'history' => $history
        ];

        return view('member/profile', $data);
    }

    public function updateProfile()
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
            $validation = \Config\Services::validation();
            return $this->fail($validation->getErrors());
        }

        $this->userModel->save($this->request->getPost());

        return $this->respond(['status' => 200, 'data' => $this->request->getPost()]);
    }
    
    public function updatePassword()
    {
        $user = $this->userModel->find($this->request->getPost('id'));
        
        if ($user) {
            if (password_verify($this->request->getPost('password'), $user['password'])) {
                if (!$this->validate([
                    'new_password' => [
                        'rules' => 'required',
                        'label' => 'new password'
                    ]
                ])) {
                    $validation = \Config\Services::validation();
                    return $this->fail($validation->getErrors());
                }
                $this->userModel->save([
                    'id' => $this->request->getPost('id'),
                    'password' => password_hash($this->request->getPost('new_password'), PASSWORD_BCRYPT)
                ]);
                return $this->respond(['status' => 200, 'message' => 'success']);
            } else {
                return $this->fail( ['password' => 'Old password wrong!!']);
            }
        } else {
            return $this->failNotFound();
        }
    }
}
