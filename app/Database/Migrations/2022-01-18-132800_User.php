<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'user_id'   => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'password' => [
                'type' => 'VARCHAR',
                
            ]
        ]);
    }

    public function down()
    {
        //
        $this->forge->dropTable('User');
    }
}
