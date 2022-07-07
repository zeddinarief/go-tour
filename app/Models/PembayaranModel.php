<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pembayaran';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_pembayaran', 'id_pesanan', 'nama_paket', 'total_biaya', 'metode_bayar', 'status_bayar', 'bukti_bayar', 'date'];

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

    public function getRiwayatPembayaran($user)
    {
        return $this->select("pembayaran.*, p.*, 
        u.nama AS nama_member, 
        w.nama_paket_wisata AS nama_paket, w.img_paket_wisata AS img, 
        j.date AS tgl_wisata,
        jn.jenis AS jenis")
        ->join("pemesanan p", "p.id = pembayaran.id_pesanan", "left")
        ->join("user u", "u.id = p.id_user", "left")
        ->join("paket_wisata w", "w.id = p.id_wisata", "left")
        ->join("jadwal_keberangkatan j", "j.id = p.id_jadwal", "left")
        ->join("jenis_wisata jn", "jn.id = w.id_jenis", "left")
        ->where('p.id_user', $user)
        ->orderBy('pembayaran.id', 'DESC')
        ->get()->getResultArray();
    }
}
