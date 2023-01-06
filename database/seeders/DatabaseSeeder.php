<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JurusanSekolah;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'is_permission' => 1,
            'remember_token' => 'hxdd5rxZft'
        ]);

        User::factory(5)->create();

        JurusanSekolah::create([
            'nama_jurusan' => 'SMA-IPA'
        ]);
        JurusanSekolah::create([
            'nama_jurusan' => 'SMA-IPS'
        ]);
        JurusanSekolah::create([
            'nama_jurusan' => 'SMK'
        ]);

        $this->call(ProdiSeeder::class);
        $this->call(JurusanSeeder::class);
    }
}