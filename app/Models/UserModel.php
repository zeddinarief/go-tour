<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password', 'nama', 'alamat', 'no_hp', 'email', 'is_active', 'role'];

    public function getUserLogin($filter) {
        // $user = $this->where($filter)->first();
        $user = $this->findAll();
        return $user;
    }
}