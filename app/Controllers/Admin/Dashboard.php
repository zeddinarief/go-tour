<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\PesananModel;
use App\Models\UserModel;
use App\Models\WisataModel;

class Dashboard extends BaseController
{
    protected $userModel;
    protected $wisataModel;
    protected $pesananModel;
    protected $pembayaranModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->wisataModel = new WisataModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        // This function will show dashboard page
        
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') { // Check is user logged in
            return redirect()->to('admin/login');
        }

        $users = $this->userModel->where('role', 'member')->countAllResults();
        $wisatas = $this->wisataModel->countAllResults();
        $pesanans = $this->pesananModel->countAllResults();
        $pembayarans = $this->pembayaranModel->countAllResults();
        $omset = $this->pembayaranModel->getOmset()['omset'];
        // dd($omset);
        $data = [
            'menu' => 'dashboard',
            'users' => $users,
            'wisatas' => $wisatas,
            'pesanans' => $pesanans,
            'pembayarans' => $pembayarans,
            'omset' => $omset
        ];

        return view('admin/dashboard', $data);
    }
    
}
