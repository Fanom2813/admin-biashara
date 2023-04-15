<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
{
    $forge = \Config\Database::forge();

    $fields = [
        'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'fullname' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],
        'email' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],
        'password' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ];

    $forge->addField($fields);
    $forge->addPrimaryKey('id');
    $forge->createTable('users');
}


    public function down()
    {
        //
    }
}
