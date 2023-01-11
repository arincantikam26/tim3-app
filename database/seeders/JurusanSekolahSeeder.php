<?php

namespace Database\Seeders;

use App\Models\JurusanSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSekolahSeeder extends Seeder
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
                'nama_jurusan' => 'SMA-IPA',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMA-IPS',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK',
                'created_at' => now()
            ]
        ];
        JurusanSekolah::insert($data);
    }
}