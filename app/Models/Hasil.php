<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    public static function metoda()
    {
        $kriteria = Kriteria::all();
        $kriteria[0]->nilai = 1;
        $namaKriteria = array();
        $i = 0;

        //perulangan nama kriteria 
        foreach ($kriteria as $item) {
            $namaKriteria[$i] = $item->nama_kriteria;
            $i++;
        }


        $preference = Preferensi::all();
        $n = $kriteria->count();
        //menyimpan hasil pembagian nilai kriteria
        $comparation = [];
        $normalisasi = [];

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i == 0) {
                    $comparation[$i][$j] = 1;
                    if ($j > $i) {
                        foreach ($preference as $value) {
                            if ($kriteria[$i]->id == $value->kriteria1 && $kriteria[$j]->id == $value->kriteria2) {
                                $comparation[$i][$j] = $value->nilai;
                            }
                        }
                    }
                } else {
                    if ($i == $j) {
                        $comparation[$i][$j] = 1;   // i==j; 

                    } elseif ($i > $j) {
                        // $comparation[$i][$j] = 0;
                        $comparation[$i][$j] = 1 / $comparation[$j][$i];
                    } else {
                        // $comparation[$i][$j] = 200;
                        foreach ($preference as $value) {
                            if ($kriteria[$i]->id == $value->kriteria1 && $kriteria[$j]->id == $value->kriteria2) {
                                $comparation[$i][$j] = $value->nilai;
                            }
                        }
                    }
                }
            }
        }
        // dd($comparation);
        $index = 0;
        $jumlahComparation = array();

        //total setiap kolom pada matriks perbandingan berpasangan
        while ($index < $kriteria->count()) {
            $tmp = 0;
            for ($i = 0; $i < $kriteria->count(); $i++) {
                $tmp += $comparation[$i][$index];
            }
            $jumlahComparation[$index] = $tmp;
            $index++;
        }
        $total = $jumlahComparation;

        //Tabel matriks nilai kriteria
        $normalisasi = [];
        $index = 0;

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $normalisasi[$i][$j] = $comparation[$i][$j] / $total[$j];
            }
        }

        //mencari jumlah/total normalisasi kolom dan baris
        while ($index < $kriteria->count()) {
            $tmp = 0;
            $temp = 0;
            // for ($i = 0; $i < $kriteria->count(); $i++) {
            //     $tmp += $normalisasi[$i][$index];
            // }

            for ($k = 0; $k < $kriteria->count(); $k++) {
                $temp += $normalisasi[$index][$k];
            }
            $jmlbarisnormalisasi[$index] = $temp;
            $prioritas[$index] = $temp / $kriteria->count();
            $eigen[$index] = ($temp / $kriteria->count()) * $total[$index];

            $index++;
        }
        $totaleigen = 0;
        $totaleigen = array_sum($eigen);

        //Rumus CI = (totaleigenvalue - totalkriteria)/(totalkriteria-1)
        $ci = ($totaleigen - $n) / ($n - 1);
        $ri = 0.58; // rasio index
        //Rumus CR=ci/ri
        $cr = $ci / $ri;


        return ([
            'namaKriteria' => $namaKriteria,
            'comparation' => $comparation,
            'total' => $total,
            'normalisasi' => $normalisasi,
            'jmlbarisnormalisasi' => $jmlbarisnormalisasi,
            'prioritas' => $prioritas,
            'eigen' => $eigen,
            'totaleigen' => $totaleigen,
            'cr' => $cr,
            'ci' => $ci

        ]);
    }
}
