<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Jurusan;
use App\Models\JurusanSekolah;
use App\Models\Kriteria;
use App\Models\Pertanyaan;
use App\Models\Pilihan;
use App\Models\Preferensi;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pilihanProdi(Request $request)
    {
        $title = 'Dashboard';
        $active = 'user';
        $id = $request->jurusansekolah_id;
        $sekolah = JurusanSekolah::whereId($id)->first();
        $available = Pilihan::whereIdJurusanSekolah($id)->get();
        return view('users.proses.select', compact('available', 'sekolah', 'title', 'active'));
    }

    public function pertanyaan(Request $request)
    {
        $title = 'Dashboard';
        $active = 'user';
        $idProdi = $request->id_prodi;
        $prodi = Prodi::whereIn('id_prodi', $idProdi)->get();
        $kriteria = Kriteria::all();
        $pertanyaan = Pertanyaan::all();

        return view('users.proses.pertanyaan', compact('title','active','prodi','kriteria','pertanyaan'));
    }

    public function hasilPilihan(Request $request) {
        $title = 'Dashboard';
        $active = 'user';
        $maxArr = array();
        $avgArr = array();

        $pre = Preferensi::all();
        if ($pre->count()) {
            $metoda = Hasil::metoda();
        } else {
            $metoda = '';
        }

        $ahp = [
            'nama' => $metoda['namaKriteria'],
            'eigen' => $metoda['eigen'],
            'totaleigen' => $metoda['totaleigen']
        ];

        $data = $request->get('data');
        // $data[0]['Minat'][0]

        for ($a = 0; $a < count($data); $a++) {
            for($i = 0; $i < count($data[$a])-1; $i++){
                $max = 0;
                $avg = 0;
                for ($j = 0; $j < count($data[$a][$ahp['nama'][$i]]); $j++){
                    $avg = $avg + $data[$a][$ahp['nama'][$i]][$j];

                    if ($j == (count($data[$a][$ahp['nama'][$i]]) - 1)) {
                        $avgArr[$a][$ahp['nama'][$i]] = $avg / ($j + 1); // set nilai rata2 dari masing2 kriteria
                        if (($avg / ($j + 1)) > $max) {
                            $max = $avg / ($j + 1);
                            var_dump($max);
                        }
                    }
                }
                $maxArr[$ahp['nama'][$i]] = $max; // set nilai max dari setiap kriteria yg ada
            }
        }

        $next = array();
        for ($i = 0; $i < count($data); $i++) {
            for ($j = 0; $j < count($ahp['nama']); $j++) {
                $next[$i][$j] = $avgArr[$i][$ahp['nama'][$j]] / $maxArr[$ahp['nama'][$j]];
            }
        }

        $saw = [
            'data' => $data,
            'max_value' => $maxArr,
            'next' => $next
        ];
    
        return view('users.proses.hasil_pilihan', compact('title', 'active', 'ahp', 'saw'));
    }
}