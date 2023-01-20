<?php

namespace Database\Seeders;

use App\Models\Pilihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilihanSeeder extends Seeder
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
                'id_jurusan_sekolah' => 1,
                'prodi_id' => 1,
                'created_at' => now()
            ],
            [
                'id_jurusan_sekolah' => 1,
                'prodi_id' => 2,
                'created_at' => now()
            ],
            [
                'id_jurusan_sekolah' => 1,
                'prodi_id' => 3,
                'created_at' => now()
            ],
            [
                'id_jurusan_sekolah' => 2,
                'prodi_id' => 3,
                'created_at' => now()
            ],

        ];

        Pilihan::insert($data);
    }
}