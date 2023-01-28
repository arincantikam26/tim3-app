<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
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
                'id_prodi' => 1,
                'id_kriteria' => 1,
                'pertanyaan' => 'Sangat berminat untuk mempelajari komputer, menginstalasi dan trouble shooting komputer secara software maupun hardware'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 1,
                'pertanyaan' => 'ingin mempelajari cara membangun aplikasi database sederhana pada komputer stand alone'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 1,
                'pertanyaan' => 'berminat untuk bisa membangun aplikasi database dan Sistem Informasi berbasis Stand alone maupun  berbasis jaringan (LAN, Internet) untuk    berbagai kebutuhan organisasi dan bisnis'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 1,
                'pertanyaan' => 'berminat untuk membangun aplikasi multimedia seperti grafis, audio , video dan animasi untuk berbagai keperluan'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 2,
                'pertanyaan' => 'mempunyai kemampuan dasar dalam menginstalasi dan troubel shooting komputer secara software dan hardware'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 2,
                'pertanyaan' => 'memiliki kemampuan adaptif dalam bidang teknologi seperti pengoperasian software'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 3,
                'pertanyaan' => 'sangat menyukai kegiatan pembelajaran yang berhubungan dengan pemrograman'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 1,
                'pertanyaan' => 'sangat berminat dalam mempelajari komputer untuk berbagai aplikasi, menginstalasi dan trouble shooting komputer secara software maupun hardware'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 1,
                'pertanyaan' => 'ingin mempelajari bagaimana memperbaiki jaringan komputer'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 1,
                'pertanyaan' => 'ingin Membangun aplikasi multimedia seperti Grafis, Audio, Video dan Animasi untuk berbagai  keperluan'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 2,
                'pertanyaan' => 'mempunya kemampuan dasar dalam mengelola, merawat dan memperabaiki jaringan komputer'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 3,
                'pertanyaan' => 'hobi melakukan kegiatan yang berkaitan dalam pembelajaran tentang komputer dan jaringan'
            ],
            [
                'id_prodi' => 3,
                'id_kriteria' => 1,
                'pertanyaan' => 'Sangat berminat untuk mempelajari komputer, menginstalasi dan trouble shooting komputer secara software maupun hardware'
            ],
            [
                'id_prodi' => 3,
                'id_kriteria' => 1,
                'pertanyaan' => 'ingin mempelajari cara membangun aplikasi database dan analisis pada komputer stand alone'
            ],
            [
                'id_prodi' => 3,
                'id_kriteria' => 1,
                'pertanyaan' => 'berminat untuk bisa membangun aplikasi database dan Sistem Informasi berbasis Stand alone maupun berbasis jaringan (LAN, Internet) untuk berbagai kebutuhan organisasi dan bisnis hingga tahap analisis'
            ]
           

            ];
            Pertanyaan::insert($data);
    }
}
