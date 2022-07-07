<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\JadwalKeberangkatanModel;
use App\Models\JenisWisataModel;
use App\Models\PembayaranModel;
use App\Models\PesananModel;
use App\Models\WisataModel;
use CodeIgniter\API\ResponseTrait;

class Pesanan extends BaseController
{

    use ResponseTrait;
    protected $pesananModel;
    protected $pembayaranModel;
    protected $wisataModel;
    protected $jadwalModel;
    protected $jenisWisataModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->pembayaranModel = new PembayaranModel();
        $this->wisataModel = new WisataModel();
        $this->jadwalModel = new JadwalKeberangkatanModel();
        $this->jenisWisataModel = new JenisWisataModel();
    }

    public function index()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'member') {
            return redirect()->to('login');
        }

        $pesanan = $this->pesananModel->getPesananByUser($this->session->get('user_id'));
        $history = $this->pembayaranModel->getRiwayatPembayaran($this->session->get('user_id'));
        $wisata = $this->wisataModel->find($pesanan['id_wisata']);
        $jenis = $this->jenisWisataModel->find($wisata['id_jenis']);
        $jadwal = $this->jadwalModel->find($pesanan['id_jadwal']);
        $pembayaran = ($pesanan['bayar'] != NULL) ? $this->pembayaranModel->find($pesanan['bayar']) : NULL;

        $data = [
            'pesanan' => $pesanan,
            'wisata' => $wisata,
            'jenis' => $jenis,
            'jadwal' => $jadwal,
            'pembayaran' => $pembayaran,
            'history' => $history
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

    public function insertAdditionalData()
    {
        $this->pesananModel->save([
            'id' => $this->request->getPost('id'),
            'jumlah_rombongan' => $this->request->getPost('jumlah_rombongan'),
            'no_hp' => $this->request->getPost('no_hp')
        ]);
        return $this->respond(['status' => 200, 'message' => 'success']);
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
