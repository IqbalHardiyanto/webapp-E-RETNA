<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                     => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'no_rm'                  => ['type' => 'VARCHAR', 'constraint' => 6, 'unique' => true],
            'nama_pasien'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'tempat_lahir'           => ['type' => 'VARCHAR', 'constraint' => 255],
            'tanggal_lahir'          => ['type' => 'DATE'],
            'nik_pasien'             => ['type' => 'VARCHAR', 'constraint' => 16],
            'jenis_kelamin'          => ['type' => 'CHAR', 'constraint' => 1], // Ubah ke CHAR(1)
            'alamat_lengkap'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'diagnosa'               => ['type' => 'VARCHAR', 'constraint' => 255],
            'dpjp'                   => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_kunjungan_terakhir' => ['type' => 'DATETIME'],
            'status'                 => ['type' => 'ENUM', 'constraint' => ['active', 'inactive', 'diarsipkan', 'siapmusnah', 'dimusnahkan'], 'default' => 'active'],
            'created_at'             => ['type' => 'DATETIME', 'null' => true],
            'updated_at'             => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}
