<?php
// app/Models/PasienModel.php
namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_rm', 'nama_pasien', 'tempat_lahir', 'tanggal_lahir', 'nik_pasien', 'jenis_kelamin', 'alamat_lengkap', 'diagnosa', 'dpjp', 'tanggal_kunjungan_terakhir', 'status', 'created_at', 'updated_at'];
}
