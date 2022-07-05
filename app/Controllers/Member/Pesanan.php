<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\JadwalKeberangkatanModel;
use App\Models\PesananModel;
use App\Models\WisataModel;

class Pesanan extends BaseController
{

    protected $pesananModel;
    protected $wisataModel;
    protected $jadwalModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->wisataModel = new WisataModel();
        $this->jadwalModel = new JadwalKeberangkatanModel();
    }

    public function index()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'member') {
            return redirect()->to('login');
        }

        $pesanan = $this->pesananModel->where(['id_user' => $this->session->get('user_id')])->orderBy('id', 'desc')->first();
        $wisata = $this->wisataModel->find($pesanan['id_wisata']);
        $jadwal = $this->jadwalModel->find($pesanan['id_jadwal']);

        $data = [
            'pesanan' => $pesanan,
            'wisata' => $wisata,
            'jadwal' => $jadwal
        ];

        return view('member/pesanan', $data);
    }

    public function save()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'member') {
            return redirect()->to('login');
        }

        $this->pesananModel->save([
            'id_user' => $this->session->get('user_id'),
            'id_wisata' => $this->request->getVar('id_wisata'),
            'id_jadwal' => $this->request->getVar('id_jadwal'),
            'date_pesanan' => date('Y-m-d H:i:s')
        ]);

        $id = $this->pesananModel->getInsertID();

        $code = $this->getCode('P', $id);
        $this->pesananModel->save([
            'id' => $id,
            'kode_pesanan' => $code
        ]);

        return redirect()->to('pesanan');
    }

    public function getCode($jenis, $id) // This function is used for generate kode
    {
        $idUser = strval($id);
        $res = $jenis;
        if (strlen($idUser) < 5) {
            for ($i=0; $i < 5 - strlen($idUser); $i++) { 
                $res .= '0';
            }
        }
        
        $res .= $id;
        return $res;
    }
}
