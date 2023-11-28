<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class admin extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ),
            'name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'user_type' => array(
                'type' => 'ENUM("admin","user")',
                'default' => 'user',
                'null' => false,
            ),
            'status' => array(
                'type' => 'INT',
                'default' => '0',
            ),
        ));
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
