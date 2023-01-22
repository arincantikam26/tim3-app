<?php

namespace Database\Seeders;

use App\Models\Preferensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreferensiSeeder extends Seeder
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
                'kriteria1' => 2,
                'nilai' => 5,
                'keterangan' => 'Penting dari',
                'kriteria2' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kriteria1' => 1,
                'nilai' => 7,
                'keterangan' => 'Mutlak Penting',
                'kriteria2' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kriteria1' => 1,
                'nilai' => 5,
                'keterangan' => 'Penting dari',
                'kriteria2' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Preferensi::insert($data);
    }
}
