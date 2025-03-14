<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'username', 'password', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
