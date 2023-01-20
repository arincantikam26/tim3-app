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
                'nama_jurusan' => 'SMK-Teknik Komputer dan Jaringan',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Rekayasa Perangkat Lunak',
                'created_at' => now()
            ], 
            [
                'nama_jurusan' => 'SMK-Multimedia',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Sistem Informatika, Jaringan dan Aplikasi',
                'created_at' => now()
            ], 
            [
                'nama_jurusan' => 'SMK-Teknik Telekomunikasi',
                'created_at' => now()
            ], 
            [
                'nama_jurusan' => 'SMK-Teknik Elektronika Industri',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Instalasi Tenaga Listrik',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Mekatronika',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Pembangkit Tenaga Listrik',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Otomasi Industri',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Bisnis Konstruksi dan Properti',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Desain Pemodelan dan Informasi Bangunan',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Gambar Bangunan',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Mesin',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Teknik Otomotif',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Kontrol Proses',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Akuntansi dan Keuangan Lembaga',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Bisnis Pemasaran',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Manajemen Perkantoran',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Otomatisasi dan Tata Kelola Perkantoran',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Perhotelan dan Jasa Pariwisata',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Wisata Bahari dan Ekowisata',
                'created_at' => now()
            ],
            [
                'nama_jurusan' => 'SMK-Tata Kecantikan',
                'created_at' => now()
            ],
            
            
        ];
        JurusanSekolah::insert($data);
    }
}