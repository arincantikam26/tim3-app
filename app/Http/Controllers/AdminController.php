<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\JurusanSekolah;
use App\Models\Kriteria;
use App\Models\Preferensi;
use App\Models\Prodi;
use App\Models\User;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $jurusan = Jurusan::count();
        $user = User::count();
        $prodi = Prodi::count();
        $j_sekolah = JurusanSekolah::count();

        return view('admin.index', [
            'title' => 'Dashboard',
            'active' => 'admin',
            'jurusan' => $jurusan,
            'user' => $user,
            'prodi' => $prodi,
            'sekolah' => $j_sekolah

        ]);
    }

    public function jurusan()
    {
        return view('admin.jurusan.index', [
            'title' => 'Jurusan',
            'active' => 'jurusan',
            'jurusan' => Jurusan::all()
        ]);
    }

    public function prodi()
    {
        return view('admin.prodi.index', [
            'title' => 'Program Studi',
            'active' => 'prodi',
            'prodi' => Jurusan::all(),

        ]);
    }

    public function preferensi()
    {
        $kriteria = Kriteria::all();
        //nilai minat berbanding minat
        $kriteria[0]->nilai = 1;
        $namaKriteria = array();
        $i = 0;


        foreach ($kriteria as $item) {
            $namaKriteria[$i] = $item->nama_kriteria;
            $i++;
        }

        $preference = Preferensi::all();
        // $comparation = [];
        // for ($i = 0; $i < $kriteria->count(); $i++) {
        //     for ($j = 0; $j < $kriteria->count(); $j++) {

        //         if ($i == $j) {
        //             $comparation[$i][$j] = 1;   // i==j; 

        //         } elseif ($i > $j) {
        //             $comparation[$i][$j] = 0.1;
        //         } else {
        //             $comparation[$i][$j] = 31;
        //         }
        //     }
        // }
        // dd($comparation);


        $n = $kriteria->count();
        $comparation = [];
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
                    } elseif ($j > $i) {
                        $comparation[$i][$j] = 2;
                    }
                }
            }
        }
        $index = 0;
        $jumlahComparation = array();

        while ($index < $kriteria->count()) {
            $tmp = 0;
            for ($i = 0; $i < $kriteria->count(); $i++) {
                $tmp += $comparation[$i][$index];
            }
            $jumlahComparation[$index] = $tmp;
            $index++;
        }
        $comparation['total'] = $jumlahComparation;
        // dd($comparation);
        return view('admin.preferensi.index', [
            'title' => 'Preferensi',
            'active' => 'preferensi',
            'preferensi' => Preferensi::with('kriteria')->get(),
            'namaKriteria' => $namaKriteria,
            'comparation' => $comparation
        ]);
    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.profile', [
            'title' => 'Profile',
            'active' => 'profile',
            'user' => $user
        ]);
    }
}