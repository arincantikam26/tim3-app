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
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/381/669/151/white-wall-paint-lighthouse-fanad-fanad-wallpaper-preview.jpg',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'Akuntansi',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/29/876/1002/paper-economy-calculator-wallpaper-preview.jpg',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'Bahasa Inggris',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/4/66/442/book-education-graphing-paper-homework-wallpaper-preview.jpg',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Sipil',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/410/75/610/pearls-blueprints-calculator-civil-engineering-wallpaper-preview.jpg',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Mesin',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/969/670/409/robot-machine-engineering-factory-wallpaper-preview.jpg',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Teknik Elektro',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/158/131/815/abstract-circuit-computer-detail-wallpaper-preview.jpg',
                'created_at' => now()

            ],
            [
                'nama_jurusan' => 'Administrasi Niaga',
                'gambar_jurusan' => 'https://p4.wallpaperbetter.com/wallpaper/608/681/293/administration-adult-banking-business-wallpaper-preview.jpg',
                'created_at' => now()

            ],

        ];

        Jurusan::insert($datajurusan);
    }
}