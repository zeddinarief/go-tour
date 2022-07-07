<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\PesananModel;
use App\Models\WisataModel;

class Home extends BaseController
{

    protected $wisataModel;
    protected $pesananModel;
    protected $pembayaranModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $pesanan = $this->pesananModel->getPesananByUser($this->session->get('user_id'));
        $history = $this->pembayaranModel->getRiwayatPembayaran($this->session->get('user_id'));
        $listWisata = $this->wisataModel->orderBy('id', 'desc')->findAll(8);
        $data = [
            'list_wisata' => $listWisata,
            'pesanan' => $pesanan,
            'history' => $history
        ];

        return view('member/home', $data);
    }
    
}
