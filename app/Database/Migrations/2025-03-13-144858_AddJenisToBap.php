<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJenisToBap extends Migration
{
    public function up()
    {
        // Tambahkan kolom "jenis" ke tabel "bap"
        $fields = [
            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
                'default'    => 'nonkerjasama', // Nilai default jika diperlukan
                'after'      => 'id', // Letakkan kolom setelah "id"
            ],
        ];
        $this->forge->addColumn('bap', $fields);
    }

    public function down()
    {
        // Hapus kolom "jenis" jika migration di-rollback
        $this->forge->dropColumn('bap', 'jenis');
    }
}
