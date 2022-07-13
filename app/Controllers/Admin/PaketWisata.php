<?php

namespace App\Controllers\Admin;

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
        // Call userModel fuction
        $this->wisataModel = new WisataModel();
        $this->jenisWisataModel = new JenisWisataModel();
        $this->jadwalModel = new JadwalKeberangkatanModel();
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

        return view('admin/wisata/list_wisata', $data);
    }

    public function detail($id)
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $wisata = $this->wisataModel->find($id);
        $listJenis = $this->jenisWisataModel->findAll();
        $listJadwal = $this->jadwalModel->where(['id_paket_wisata' => $id])->findAll();
        
        $data = [
            'menu' => 'wisata',
            'list_jenis' => $listJenis,
            'wisata' => $wisata,
            'list_jadwal' => $listJadwal,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/wisata/detail_wisata', $data);
    }

    public function insert()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $listJenis = $this->jenisWisataModel->findAll();

        $data = [
            'menu' => 'wisata',
            'list_jenis' => $listJenis,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/wisata/wisata_form', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'image_paket' => 'max_size[image_paket,2048]|is_image[image_paket]|mime_in[image_paket,image/jpg,image/jpeg,image/png]'
        ])) {
            return redirect()->to('admin/wisata/' . $id)->withInput();
        }

        $img = $this->request->getFile('image_paket');        

        if ($img->getError() !== 4) {
            $namaImg = $img->getName();

            $img->move('img/wisata', $namaImg);
        } else {
            $namaImg = $this->request->getPost('old_image_paket');
        }

        $jenis = $this->jenisWisataModel->find($this->request->getPost('id_jenis'));
        $code = $this->getCode($jenis['kode_jenis'], $id);

        $this->wisataModel->save([
            'id' => $this->request->getVar('id'),
            'kode_paket_wisata' => $code,
            'nama_paket_wisata' => $this->request->getVar('nama_paket'),
            'jumlah_rombongan' => $this->request->getVar('rombongan'),
            'harga' => $this->request->getVar('harga'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'img_paket_wisata' => $namaImg
        ]);

        return redirect()->to('admin/wisata/' . $id)->with('data_edited', 'Data berhasil diubah');
    }

    public function save()
    {
        if (!$this->validate([
            'image_paket' => 'uploaded[image_paket]|max_size[image_paket,2048]|is_image[image_paket]|mime_in[image_paket,image/jpg,image/jpeg,image/png]'
        ])) {
            return redirect()->to('admin/wisata/insert')->withInput();
        }

        $img = $this->request->getFile('image_paket');        

        if ($img->getError() !== 4) {
            $namaImg = $img->getName();

            $img->move('img/wisata', $namaImg);
        }

        $jenis = $this->jenisWisataModel->find($this->request->getPost('id_jenis'));

        $this->wisataModel->save([
            'nama_paket_wisata' => $this->request->getVar('nama_paket'),
            'jumlah_rombongan' => $this->request->getVar('rombongan'),
            'harga' => $this->request->getVar('harga'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'date' => date('Y-m-d H:i:s'),
            'img_paket_wisata' => $namaImg
        ]);
        
        $id = $this->wisataModel->getInsertID();

        $code = $this->getCode($jenis['kode_jenis'], $id);
        $this->wisataModel->save([
            'id' => $id,
            'kode_paket_wisata' => $code
        ]);
        return redirect()->to('admin/wisata')->with('data_added', 'Data berhasil ditambahkan');
    }

    public function delete() // This is function for delete paket wisata data
    {
        $this->wisataModel->delete($this->request->getPost('id'));
        return redirect()->to('/admin/wisata')->with('data_added', 'Data berhasil dihapus');
    }

    public function addJadwal()
    {
        $this->jadwalModel->save([
            'id_paket_wisata' => $this->request->getVar('id_wisata'),
            'date' => $this->request->getVar('date')
        ]);

        return redirect()->to('admin/wisata/' . $this->request->getVar('id_wisata'))->with('jadwal_added', 'Jadwal berhasil ditambahkan');
    }

    public function deleteJadwal($idWisata)
    {
        $this->jadwalModel->delete($this->request->getPost('id'));
        return redirect()->to('/admin/wisata/' . $idWisata)->with('jadwal_added', 'Jadwal berhasil dihapus');
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
