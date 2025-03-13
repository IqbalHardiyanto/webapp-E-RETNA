<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBapTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pasien' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'link_file' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tanggal_dimusnahkan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bap');
    }

    public function down()
    {
        $this->forge->dropTable('bap');
    }
}
