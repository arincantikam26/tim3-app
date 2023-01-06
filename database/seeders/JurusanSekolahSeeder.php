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
                'nama_jurusan' => 'SMA-IPA'
            ],
            [
                'nama_jurusan' => 'SMA-IPS'
            ],
            [
                'nama_jurusan' => 'SMK'
            ]
        ];
        JurusanSekolah::insert($data);
    }
}