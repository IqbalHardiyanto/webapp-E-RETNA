<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_lengkap'  => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'username'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false, 'unique' => true],
            'password'      => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'role'          => ['type' => 'ENUM("petugas", "kepala")', 'default' => 'petugas'],
            'created_at'             => ['type' => 'DATETIME', 'null' => true],
            'updated_at'             => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
