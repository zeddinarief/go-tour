<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class Home extends BaseController
{

    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        $listWisata = $this->wisataModel->orderBy('id', 'desc')->findAll(8);
        $data = [
            'list_wisata' => $listWisata
        ];

        return view('member/home', $data);
    }
    
}
