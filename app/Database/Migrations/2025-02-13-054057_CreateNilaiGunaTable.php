<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiGunaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_pasien' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'doc_rekam_medis' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ringk_masuk_keluar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'resume_medis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'lembar_pengesahan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'ident_bayi_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'persetujuan_medis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'lembar_kematian' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_pasien', 'pasien', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('nilai_guna');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_guna');
    }
}
