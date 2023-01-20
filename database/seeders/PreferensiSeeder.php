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
                '' => ''
            ]
            ];
            Preferensi::insert($data);
    }
}
