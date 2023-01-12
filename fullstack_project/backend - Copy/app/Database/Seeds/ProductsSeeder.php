<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'product_name' => 'Black jacket',
                'product_details'    => 'Premium jacket for Idb Student',
                'product_price'    => '2000',
                'product_category'    => '1',

            ],
            [
                'product_name' => 'Red jacket',
                'product_details'    => 'Faltu jacket for Idb Student',
                'product_price'    => '500',
                'product_category'    => '2',

            ],
            [
                'product_name' => 'Shirt',
                'product_details'    => 'ODC Market special',
                'product_price'    => '300',
                'product_category'    => '3',

            ],
            [
                'product_name' => 'Hp laptop',
                'product_details'    => 'core i7 slim set',
                'product_price'    => '80000',
                'product_category'    => '4',

            ],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($datas as $data) {
            $this->db->table('products')->insert($data);
        }
    }
}
