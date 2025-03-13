<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLogActivityTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_user'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => false],
            'actions'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'created_at'             => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('log_activity');
    }

    public function down()
    {
        $this->forge->dropTable('log_activity');
    }
}
