<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\JadwalKeberangkatanModel;
use App\Models\JenisWisataModel;
use App\Models\WisataModel;

class PaketWisata extends BaseController
{

    protected $wisataModel;
    protected $jenisWisataModel;
    protected $jadwalModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        $this->jenisWisataModel = new JenisWisataModel();
        $this->jadwalModel = new JadwalKeberangkatanModel();
    }

    public function index()
    {
        $listWisata = $this->wisataModel->orderBy('id', 'desc')->findAll();
        $data = [
            'list_wisata' => $listWisata
        ];

        return view('member/wisata', $data);
    }

    public function detail($kode)
    {
        $wisata = $this->wisataModel->where(['kode_paket_wisata' => $kode])->first();
        $jenisWisata = $this->jenisWisataModel->where(['id' => $wisata['id_jenis']])->first();
        $listJadwal = $this->jadwalModel->where(['id_paket_wisata' => $wisata['id']])->findAll();

        $data = [
            'wisata' => $wisata,
            'jenis_wisata' => $jenisWisata,
            'list_jadwal' => $listJadwal
        ];

        return view('member/detail_wisata', $data);
    }
}