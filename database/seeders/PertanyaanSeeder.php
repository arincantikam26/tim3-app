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
                'id_kriteria' => 2,
                'pertanyaan' => 'Mempunyai kemampuan dasar dalam menginstalasi dan troubel shooting komputer secara software dan hardware'
            ],
            [
                'id_prodi' => 1,
                'id_kriteria' => 3,
                'pertanyaan' => 'Sangat menyukai kegiatan pembelajaran yang berhubungan dengan pemrograman'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 1,
                'pertanyaan' => 'Sangat berminat dalam mempelajari komputer untuk berbagai aplikasi, menginstalasi dan trouble shooting komputer secara software maupun hardware'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 2,
                'pertanyaan' => 'Mempunya kemampuan dasar dalam mengelola, merawat dan memperabaiki jaringan komputer'
            ],
            [
                'id_prodi' => 2,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi melakukan kegiatan yang berkaitan dalam pembelajaran tentang komputer dan jaringan'
            ],
            [
                'id_prodi' => 3,
                'id_kriteria' => 1,
                'pertanyaan' => 'Sangat berminat untuk mempelajari komputer, menginstalasi dan trouble shooting komputer secara software maupun hardware'
            ],
            [
                'id_prodi' => 10,
                'id_kriteria' => 1,
                'pertanyaan' => 'Menyukai mesin dan hal-hal yang berkaitan dengan teknik'
            ],
            [
                'id_prodi' => 10,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dalam perawatan mesin serta bidang keahlian fisika dan matematika'
            ],
            [
                'id_prodi' => 10,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam merakit, merawat dan pembelajaran tentang mesin'
            ],
            [
                'id_prodi' => 4,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam ilmu perhitungan, sistem keuangan dan etiket bisnis'
            ],
            [
                'id_prodi' => 4,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar matematika dan software akuntansi'
            ],
            [
                'id_prodi' => 4,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi melakukan pembuatan laporan keuangan, melakukan analisis pasar keuangan dan senang berbisnis'
            ]


            ];
            Pertanyaan::insert($data);
    }
}
