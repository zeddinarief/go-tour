<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;
    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') { // Check is user logged in
            return redirect()->to('admin/login');
        }

        $listPembayaran = $this->pembayaranModel->getAllPembayaran();

        $data = [
            'menu' => 'pembayaran',
            'daftar_pembayaran' => $listPembayaran
        ];

        return view('admin/pembayaran/list_pembayaran', $data);
    }

    public function detail($id)
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') { // Check is user logged in
            return redirect()->to('admin/login');
        }

        $pembayaran = $this->pembayaranModel->getPembayaranDetail($id);
// dd($pembayaran);
        $data = [
            'menu' => 'pembayaran',
            'pembayaran' => $pembayaran
        ];

        return view('admin/pembayaran/detail_pembayaran', $data);
    }
}
