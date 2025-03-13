<?php

namespace App\Models;

use CodeIgniter\Model;

class LogActivityModel extends Model
{
    protected $table = 'log_activity';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'actions', 'created_at'];
    public function getAllLogs()
    {
        return $this->select('log_activity.*, users.nama_lengkap')
                    ->join('users', 'users.id = log_activity.id_user')
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }
}
