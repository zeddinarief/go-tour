<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class JenisWisata extends BaseController
{
    public function index() 
    {
        // This function will show list of Paket Wisata
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        // $listWisata = $this->wisataModel->findAll(); // Get all paket wisata

        $data = [
            'menu' => 'wisata',
            'daftar_wisata' => []
        ];

        return view('admin/wisata/list_jenis_wisata', $data);
    }

}