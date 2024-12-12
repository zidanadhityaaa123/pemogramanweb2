<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelangganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE

            ],
            'id_user' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 225,
            ],
            'no_hp' => [
                'type'          => 'VARCHAR',
                'constraint'    => 16,
            ],
            'alamat' => [
                'type'          => 'VARCHAR',
                'constraint'    => 225,
            ]



            ]);

            $this->forge->addKey('id_pelanggan', true);
            $this->forge->addForeignKey('id_user', 'users', 'id');
            $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
