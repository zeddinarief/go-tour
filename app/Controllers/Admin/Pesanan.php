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

    public function index() // Fungsi untuk menampilkan list pesanan beserta data yang dibutuhkan
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }
        
        $listPesanan = $this->pesananModel->getAllPesanan();

        $data = [
            'menu' => 'pesanan',
            'list_pesanan' => $listPesanan
        ];

        return view('admin/pesanan/list_pesanan', $data);
    }

    public function detail($id) // Fungsi untuk menampilkan detail pesanan
    {
        $pesanan = $this->pesananModel->getPesanan($id);
        $pembayaran = ($pesanan['bayar'] != NULL) ? $this->pembayaranModel->find($pesanan['bayar']) : NULL;
        $peserta = $this->pesertaModel->where(['id_pesanan' => $id])->orderBy('id', 'desc')->first();
        // dd($pembayaran);
        $data = [
            'menu' => 'pesanan',
            'pesanan' => $pesanan,
            'peserta' => $peserta,
            'bayar' => $pembayaran
        ];

        return view('admin/pesanan/detail_pesanan', $data);
    }

    public function update() // Fungsi untuk melakukan konfirmasi pembayaran
    {
        if ($this->request->getPost('status_bayar') == 'accept') {
            $status = 'Pembayaran berhasil';
        } else {
            $status = 'Pembayaran ditolak';
        }
        $this->pembayaranModel->save([
            'id' => $this->request->getPost('id'),
            'status_bayar' => $status
        ]);

        return redirect()->to('admin/pesanan');
    }
}
