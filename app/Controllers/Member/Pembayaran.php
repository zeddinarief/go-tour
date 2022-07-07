<?php

namespace App\Controllers\Member;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use CodeIgniter\API\ResponseTrait;

class Pembayaran extends BaseController
{

    use ResponseTrait;
    protected $pembayaranModel;
    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        //
    }

    public function uploadBukti()
    {
        if (!$this->validate([
            'bukti_bayar' => 'uploaded[bukti_bayar]|max_size[bukti_bayar,2048]|is_image[bukti_bayar]|mime_in[bukti_bayar,image/jpg,image/jpeg,image/png]',
            'metode_bayar' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return $this->fail($validation->getErrors());
        }

        $img = $this->request->getFile('bukti_bayar');        
        
        if ($img->getError() !== 4) {
            $namaImg = $img->getName();

            $img->move('img/pembayaran', $namaImg);
        }
        $this->pembayaranModel->save([
            'id_pesanan' => $this->request->getPost('id'),
            'nama_paket' => $this->request->getPost('nama_paket'),
            'total_biaya' => $this->request->getPost('harga'),
            'metode_bayar' => $this->request->getPost('metode_bayar'),
            'status_bayar' => 'Menunggu konfirmasi',
            'bukti_bayar' => $namaImg,
            'date' => date('Y-m-d H:i:s')
        ]);

        $id = $this->pembayaranModel->getInsertID();

        $code = $this->getCode('B', $id);
        $this->pembayaranModel->save([
            'id' => $id,
            'kode_pembayaran' => $code
        ]);
        
        return $this->respond(['status' => 200, 'message' => 'success']);
        // return $this->respond(['data' => $this->request->getPost(), 'img' => $img->getName()]);
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
