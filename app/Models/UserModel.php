<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password', 'nama', 'alamat', 'no_hp', 'email', 'is_active', 'role'];

    // Get one user data by filters
    public function getUser($filter) {
        return $this->where($filter)->first();
    }

    // Get all member
    public function getAllMember()
    {
        return $this->where('role', 'member')->findAll();
    }
}