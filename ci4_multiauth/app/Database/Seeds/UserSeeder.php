<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "name" => "Golam Rabbany",
                "email" => "grb@mail.com",
                "phone_no" => "7899654125",
                "role" => "admin",
                "password" => password_hash("abcd123", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Mahidul islam",
                "email" => "mahir@mail.com",
                "phone_no" => "8888888888",
                "role" => "editor",
                "password" => password_hash("abcd123", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
