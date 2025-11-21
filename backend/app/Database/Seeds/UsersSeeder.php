<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s'); // Current timestamp
        $password = password_hash('password123', PASSWORD_BCRYPT);
        //users 
        $users = [
            [

                'nickname' => 'Tinee',
                'first_name' => 'Kyla',
                'middle_name' => 'P',
                'last_name' => 'Tibay',
                'email' => 'kyla@gmail.com',
                'type' => 'user',
                 'password_hash' => $password,
                'gender' => 'female',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [

                'nickname' => 'Shinitchi',
                'first_name' => 'Vian Rotciv',
                'middle_name' => 'DR',
                'last_name' => 'Tibay',
                'email' => 'vdtibay@gmail.com',
                'type' => 'user',
                 'password_hash' => $password,
                'gender' => 'male',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            //admin
            [

                'nickname' => 'Kudo',
                'first_name' => 'Rotciv',
                'middle_name' =>  null,
                'last_name' => 'Tibay',
                'email' => 'kudortciv@gmail.com',
                'password_hash' => $password,
                'type' => 'admin',
                'gender' => 'male',
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ];
        $this->db->table('users')->insertBatch($users);
    }
}
