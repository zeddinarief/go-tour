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
        dd($this->pesananModel->getAllPesanan());
        return view('admin/pesanan/list_pesanan');
    }

    public function detail($id)
    {
        $data = [
            'menu' => 'pesanan'
        ];

        return view('admin/pesanan/detail_pesanan', $data);
    }
}
