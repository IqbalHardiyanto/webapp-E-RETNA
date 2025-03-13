<?php

namespace App\Models;

use CodeIgniter\Model;

class BapModel extends Model
{
    protected $table = 'bap';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array'; // atau 'object' jika Anda mau
    protected $allowedFields = [
        'judul',
        'link_file',
        'keterangan',
        'id_pasien',
        'tanggal_dimusnahkan',
        'jenis',
        'pihak_kesatu_nama',
        'pihak_kesatu_jabatan',
        'pihak_kedua_nama',
        'pihak_kedua_instansi',
        'pelaksanaan_hari',
        'pelaksanaan_tanggal',
        'pelaksanaan_waktu'
    ];
}
