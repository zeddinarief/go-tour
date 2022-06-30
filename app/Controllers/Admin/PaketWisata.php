<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class PaketWisata extends BaseController
{

    protected $wisataModel;

    public function __construct()
    {
        // Call userModel fuction
        $this->wisataModel = new WisataModel();
    }
    
    public function index() 
    {
        // This function will show list of Paket Wisata

        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $listWisata = $this->wisataModel->findAll(); // Get all paket wisata

        $data = [
            'menu' => 'wisata',
            'daftar_wisata' => $listWisata
        ];

        return view('admin/list_wisata', $data);
    }
    
}
