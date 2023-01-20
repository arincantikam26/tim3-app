<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'is_permission' => 1
            ],
            [
                'name' => 'algo',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'is_permission' => 2
            ]
        ];

        User::insert($data);
    }
}