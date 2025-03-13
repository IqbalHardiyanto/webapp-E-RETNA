<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiGunaModel extends Model
{
    protected $table = 'nilai_guna'; // The table where the files are stored
    protected $primaryKey = 'id'; // The primary key of the table
    protected $allowedFields = ['id_pasien', 'dokumen_rekam_medis_sesuai_dengan_kepentingan_pelayanan', 'ringkasan_masuk_dan_keluar', 'resume_medis', 'lembar_operasi', 'identifikasi_bayi_lahir', 'informed_consent', 'lembar_kematian']; // Allowed fields in the table

    // Insert files into the table
    public function insertFile($data)
    {
        return $this->insert($data); // Use insert method from CodeIgniter Model to insert the data into the table
    }
    public function getFilesByPasienId($id_pasien)
    {
        return $this->where('id_pasien', $id_pasien)->findAll();
    }
}
