<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',

            ],
            'product_details' => [
                'type' => 'TEXT',
                'null' => true,
                'constraint' => '300',
            ],
            'product_price' => [
                'type' => "decimal",
                'constraint' => '10, 2',
            ],
            'product_image' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => '300',
            ],
            'product_category' => [
                'type' => 'TINYINT',


            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }
    public function down()
    {
        $this->forge->dropTable('products');
    }
}
