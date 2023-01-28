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
        User::factory(5)->create();

        $this->call(ProdiSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(JurusanSekolahSeeder::class);
        $this->call(KriteriaSeeder::class);
        $this->call(PilihanSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(PreferensiSeeder::class);
        $this->call(PertanyaanSeeder::class);
 
    }
}