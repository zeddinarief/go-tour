<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\JadwalKeberangkatanModel;
use App\Models\JenisWisataModel;
use App\Models\PembayaranModel;
use App\Models\PesananModel;
use App\Models\WisataModel;

class PaketWisata extends BaseController
{

    protected $wisataModel;
    protected $jenisWisataModel;
    protected $jadwalModel;
    protected $pesananModel;
    protected $pembayaranModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        $this->jenisWisataModel = new JenisWisataModel();
        $this->jadwalModel = new JadwalKeberangkatanModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $pesanan = $this->pesananModel->getPesananByUser($this->session->get('user_id'));
        $history = $this->pembayaranModel->getRiwayatPembayaran($this->session->get('user_id'));
        $listWisata = $this->wisataModel->orderBy('id', 'desc')->findAll();
        $data = [
            'list_wisata' => $listWisata,
            'pesanan' => $pesanan,
            'history' => $history
        ];

        return view('member/wisata', $data);
    }

    public function detail($kode)
    {
        $wisata = $this->wisataModel->where(['kode_paket_wisata' => $kode])->first();
        $jenisWisata = $this->jenisWisataModel->where(['id' => $wisata['id_jenis']])->first();
        $listJadwal = $this->jadwalModel->where(['id_paket_wisata' => $wisata['id']])->findAll();
        $pesanan = $this->pesananModel->getPesananByUser($this->session->get('user_id'));
        $history = $this->pembayaranModel->getRiwayatPembayaran($this->session->get('user_id'));

        $data = [
            'wisata' => $wisata,
            'jenis_wisata' => $jenisWisata,
            'list_jadwal' => $listJadwal,
            'pesanan' => $pesanan,
            'history' => $history
        ];

        return view('member/detail_wisata', $data);
    }
}