<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
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
                'nama_kriteria' => 'Minat',
                'created_at' => now()
            ],
            [
                'nama_kriteria' => 'Bakat',
                'created_at' => now()
            ],
            [
                'nama_kriteria' => 'Hobi',
                'created_at' => now()
            ],
        ];

        Kriteria::insert($data);
    }
}