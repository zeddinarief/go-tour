<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DaftarPesertaModel;
use App\Models\PembayaranModel;
use App\Models\PesananModel;

class Pesanan extends BaseController
{

    protected $pesananModel;
    protected $pembayaranModel;
    protected $pesertaModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->pesertaModel = new DaftarPesertaModel();
    }

    public function index()
    {
        $listPesanan = $this->pesananModel->getAllPesanan();

        $data = [
            'menu' => 'pesanan',
            'list_pesanan' => $listPesanan
        ];

        return view('admin/pesanan/list_pesanan', $data);
    }

    public function detail($id)
    {
        $pesanan = $this->pesananModel->getPesanan($id);
        $pembayaran = ($pesanan['bayar'] != NULL) ? $this->pembayaranModel->find($pesanan['bayar']) : NULL;
        $peserta = $this->pesertaModel->where(['id_pesanan' => $id])->first();
        dd($peserta);
        $data = [
            'menu' => 'pesanan',
            'pesanan' => $pesanan,
            'peserta' => $peserta,
            'bayar' => $pembayaran
        ];

        return view('admin/pesanan/detail_pesanan', $data);
    }
}
