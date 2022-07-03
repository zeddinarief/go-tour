<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesananModel;

class Pesanan extends BaseController
{

    protected $pesananModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
    }

    public function index()
    {
        $listPesanan = $this->pesananModel->getAllPesanan();
        dd($listPesanan);

        $data = [
            'menu' => 'pesanan',
            'list_pesanan' => $listPesanan
        ];

        return view('admin/pesanan/list_pesanan', $data);
    }

    public function detail($id)
    {
        $data = [
            'menu' => 'pesanan'
        ];

        return view('admin/pesanan/detail_pesanan', $data);
    }
}
