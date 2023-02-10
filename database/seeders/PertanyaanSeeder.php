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
                'id_prodi' => 3,
                'id_kriteria' => 2,
                'pertanyaan' => 'Mempunyai kemampuan dasar dalam menginstalasi dan trouble shooting komputer secara software dan hardware'
            ],
            [
                'id_prodi' => 3,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi melakukan kegiatan yang berkaitan dengan komputer dan jaringan'
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
            ],
            [
                'id_prodi' => 5,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam ilmu perhitungan, sistem keuangan dan etiket bisnis'
            ],
            [
                'id_prodi' => 5,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar matematika dan software akuntansi'
            ],
            [
                'id_prodi' => 5,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi melakukan pembuatan laporan keuangan, melakukan analisis pasar keuangan dan senang berbisnis'
            ],
            [
                'id_prodi' => 6,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari bahasa asing.'
            ],
            [
                'id_prodi' => 6,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar dalam mengingat dan cepat dalam belajar bahasa asing.'
            ],
            [
                'id_prodi' => 6,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi berbicara bahasa asing serta menyenangi hal-hal yang berkaitan dengan bahasa asing.'
            ],
            [
                'id_prodi' => 7,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.'
            ],
            [
                'id_prodi' => 7,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.'
            ],
            [
                'id_prodi' => 7,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. '
            ],
            [
                'id_prodi' => 8,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.'
            ],
            [
                'id_prodi' => 8,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.'
            ],
            [
                'id_prodi' => 8,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. '
            ],
            [
                'id_prodi' => 9,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang bagaimana merancang, membangun, merenovasi gedung dan infrastruktur lainya juga mencakup lingkungan.'
            ],
            [
                'id_prodi' => 9,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang infrastruktur bangunan dan lingkungan.'
            ],
            [
                'id_prodi' => 9,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam membangun, merenovasi, dan merancang suatu gedung atau infrastruktur lainya. '
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
                'id_prodi' => 11,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari ilmu fisika dalam praktek mesin-mesin besar yang berfungsi untuk kegiatan konstruksi.'
            ],
            [
                'id_prodi' => 11,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang alat-alat berat dan keselamatan kerja.'
            ],
            [
                'id_prodi' => 11,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam menggunakan dan mengoperasikan alat-alat berat. '
            ],
            [
                'id_prodi' => 12,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.'
            ],
            [
                'id_prodi' => 12,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.'
            ],
            [
                'id_prodi' => 12,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi berkegiatan yang berkaitan dengan kelistrikan. '
            ],
            [
                'id_prodi' => 13,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.'
            ],
            [
                'id_prodi' => 13,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.'
            ],
            [
                'id_prodi' => 13,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi berkegiatan yang berkaitan dengan kelistrikan. '
            ],
            [
                'id_prodi' => 14,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari tentang komponen listrik dan alat-alat semi konduktor.'
            ],
            [
                'id_prodi' => 14,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki keahlian dasar tentang kelistrikan dan alat-alat elektronik.'
            ],
            [
                'id_prodi' => 14,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi berkegiatan yang berkaitan dengan kelistrikan. '
            ],
            [
                'id_prodi' => 15,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari segala sesuatu yang terkait dengan kegiatan operasional bisnis dan perusahaan.'
            ],
            [
                'id_prodi' => 15,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki kemampuan dasar manajerial, komunasi, dan analisa yang bagus. '
            ],
            [
                'id_prodi' => 15,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam mengurus dan mengelola file-file yang berkaitan dengan perusahaan dan bisnis.'
            ],
            [
                'id_prodi' => 15,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari ilmu pengelolaan perjalanan wisata, pemandu wisata, maupun layanan kehumasan.'
            ],
            [
                'id_prodi' => 16,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki kemampuan komunikasi yang bagus.'
            ],
            [
                'id_prodi' => 16,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam mengurus dan memandu perjalana wisata. '
            ],
            [
                'id_prodi' => 17,
                'id_kriteria' => 1,
                'pertanyaan' => 'Berminat dalam mempelajari segala sesuatu yang terkait dengan kegiatan operasional bisnis dan perusahaan.'
            ],
            [
                'id_prodi' => 17,
                'id_kriteria' => 2,
                'pertanyaan' => 'Memiliki kemampuan dasar manajerial, komunasi, dan analisa yang bagus. '
            ],
            [
                'id_prodi' => 17,
                'id_kriteria' => 3,
                'pertanyaan' => 'Hobi dalam mengurus dan mengelola file-file yang berkaitan dengan perusahaan dan bisnis.'
            ],
            


            ];
            Pertanyaan::insert($data);
    }
}
