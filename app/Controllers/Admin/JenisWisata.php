<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JenisWisataModel;

class JenisWisata extends BaseController
{

    protected $jenisWisataModel;
    public function __construct()
    {
        $this->jenisWisataModel = new JenisWisataModel();
    }
    public function index() 
    {
        // This function will show list of Jenis wisata
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $listJenis = $this->jenisWisataModel->findAll(); // Get all paket wisata

        $data = [
            'menu' => 'jenis_wisata',
            'daftar_jenis_wisata' => $listJenis
        ];

        return view('admin/jenis_wisata/list_jenis_wisata', $data);
    }

    public function detail($id)
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $jenisWisata = $this->jenisWisataModel->find($id);

        $data = [
            'menu' => 'jenis_wisata',
            'validation' => \Config\Services::validation(),
            'jenis_wisata' => $jenisWisata
        ];

        return view('admin/jenis_wisata/detail_jenis_wisata', $data);
    }

    public function insert()
    {
        if ($this->session->get('isLogin') != 'yes' || $this->session->get('role') != 'admin') {
            return redirect()->to('admin/login');
        }

        $data = [
            'menu' => 'jenis_wisata',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/jenis_wisata/jenis_wisata_form', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'jenis' => 'required',
            'kode_jenis' => 'required|is_unique[jenis_wisata.kode_jenis,id,{id}]'
        ])) {
            return redirect()->to('/admin/jenis_wisata/' . $id)->withInput();
        }

        $this->jenisWisataModel->save($this->request->getPost());

        return redirect()->to('admin/jenis_wisata')->with('data_edited', 'Data berhasil diubah');
    }

    public function save()
    {
        if (!$this->validate([
            'jenis' => 'required',
            'kode_jenis' => 'required|is_unique[jenis_wisata.kode_jenis]'
        ])) {
            return redirect()->to('/admin/jenis_wisata/insert')->withInput();
        }

        $this->jenisWisataModel->save($this->request->getPost());

        return redirect()->to('admin/jenis_wisata')->with('data_added', 'Data berhasil ditambahkan');
    }

}