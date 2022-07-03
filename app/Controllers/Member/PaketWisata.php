<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class PaketWisata extends BaseController
{

    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        $listWisata = $this->wisataModel->orderBy('id', 'desc')->findAll();
        $data = [
            'list_wisata' => $listWisata
        ];

        return view('member/wisata', $data);
    }

    public function detail()
    {
        return view('member/detail_wisata');
    }
}
