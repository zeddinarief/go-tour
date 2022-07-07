<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_pesanan', 'date_pesanan', 'id_user', 'id_wisata', 'id_jadwal', 'no_hp', 'jumlah_rombongan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllPesanan()
    {
        return $this->select("pemesanan.*, user.nama AS nama_member, paket_wisata.nama_paket_wisata AS nama_paket, 
        (SELECT b.id FROM pembayaran b WHERE b.id_pesanan = pemesanan.id ORDER BY b.id DESC LIMIT 1) AS bayar")
        ->join("user", "user.id = pemesanan.id_user", "left")
        ->join("paket_wisata", "paket_wisata.id = pemesanan.id_wisata", "left")
        ->get()->getResultArray();
    }
    
    public function getAllPesananByUser($user)
    {
        return $this->select("pemesanan.*, user.nama AS nama_member, paket_wisata.nama_paket_wisata AS nama_paket, 
        (SELECT b.id FROM pembayaran b WHERE b.id_pesanan = pemesanan.id ORDER BY b.id DESC LIMIT 1) AS bayar")
        ->join("user", "user.id = pemesanan.id_user", "left")
        ->join("paket_wisata", "paket_wisata.id = pemesanan.id_wisata", "left")
        ->where('pemesanan.id_user', $user)
        ->orderBy('pemesanan.id', 'DESC')
        ->get()->getResultArray();
    }
    
    public function getPesanan($id)
    {
        return $this->select("pemesanan.*, user.nama AS nama_member, paket_wisata.nama_paket_wisata AS nama_paket, paket_wisata.harga, j.date, 
        (SELECT b.id FROM pembayaran b WHERE b.id_pesanan = pemesanan.id ORDER BY b.id DESC LIMIT 1) AS bayar")
        ->join("user", "user.id = pemesanan.id_user", "left")
        ->join("paket_wisata", "paket_wisata.id = pemesanan.id_wisata", "left")
        ->join("jadwal_keberangkatan j", "j.id = pemesanan.id_jadwal", "left")
        ->where('pemesanan.id', $id)
        ->first();
    }
    
    public function getPesananByUser($id)
    {
        return $this->select("pemesanan.*, user.nama AS nama_member, paket_wisata.nama_paket_wisata AS nama_paket, paket_wisata.harga, j.date, 
        (SELECT b.id FROM pembayaran b WHERE b.id_pesanan = pemesanan.id ORDER BY b.id DESC LIMIT 1) AS bayar")
        ->join("user", "user.id = pemesanan.id_user", "left")
        ->join("paket_wisata", "paket_wisata.id = pemesanan.id_wisata", "left")
        ->join("jadwal_keberangkatan j", "j.id = pemesanan.id_jadwal", "left")
        ->where('pemesanan.id_user', $id)
        ->orderBy('pemesanan.id', 'DESC')
        ->first();
    }
}
