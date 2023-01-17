<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',

            ],
            'category_details' => [
                'type' => 'TEXT',
                'null' => true,
                'constraint' => '300',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');
    }
    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
