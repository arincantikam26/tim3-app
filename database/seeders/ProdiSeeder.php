<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataprodi = [
            [
                'jurusan_id' => 1,
                'nama_prodi' => 'D3-Manajemen Informatika',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 1,
                'nama_prodi' => 'D3-Teknik Komputer',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 1,
                'nama_prodi' => 'D4-Teknologi Rekayasa Perangkat Lunak',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 2,
                'nama_prodi' => 'D3-Akuntansi',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 2,
                'nama_prodi' => 'D4-Akuntansi',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 3,
                'nama_prodi' => 'D3-Bahasa Inggris',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 4,
                'nama_prodi' => 'D3-Teknik Sipil',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 4,
                'nama_prodi' => 'D4-Teknik Perancangan Jalan dan Jembatan',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 4,
                'nama_prodi' => 'D4-Manajemen Rekayasa Konstruksi',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 5,
                'nama_prodi' => 'D3-Teknik Mesin',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 5,
                'nama_prodi' => 'D3-Teknik Alat Berat',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 6,
                'nama_prodi' => 'D3-Teknik Eletronika',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 6,
                'nama_prodi' => 'D4-Teknik Elektronika',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 6,
                'nama_prodi' => 'D4-Teknik Listrik',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 7,
                'nama_prodi' => 'D3-Administrasi Bisnis',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 7,
                'nama_prodi' => 'D3-Usaha Perjalanan Wisata',
                'created_at' => now()
            ],
            [
                'jurusan_id' => 7,
                'nama_prodi' => 'D4-Administrasi Bisnis',
                'created_at' => now()
            ],

        ];

        Prodi::insert($dataprodi);
    }
}