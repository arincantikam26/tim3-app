<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datajurusan = [
            [
                'nama_jurusan' => 'Teknologi Informasi',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'Akuntansi',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'Bahasa Inggris',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Sipil',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Mesin',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Elektro',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Administrasi Niaga',
                'created_at' => now()

            ],

        ];

        Jurusan::insert($datajurusan);
    }
}