<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'pembayaran',
            'daftar_pembayaran' => []
        ];

        return view('admin/pembayaran/list_pembayaran', $data);
    }

    public function detail($id)
    {
        $data = [
            'menu' => 'pembayaran'
        ];

        return view('admin/pembayaran/detail_pembayaran', $data);
    }
}
