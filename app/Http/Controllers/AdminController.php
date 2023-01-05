<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\JurusanSekolah;
use App\Models\Prodi;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::count();
        $user = User::count();
        $prodi = Prodi::count();
        $j_sekolah = JurusanSekolah::count();

        return view('admin.index', [
            'title' => 'Home',
            'active' => 'admin',
            'jurusan' => $jurusan,
            'user' => $user,
            'prodi' => $prodi,
            'sekolah' => $j_sekolah

        ]);
    }

    public function jurusan()
    {
        return view('admin.jurusan', [
            'title' => 'Jurusan',
            'active' => 'jurusan'
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

    public function sekolah()
    {
        return view('admin.sekolah', [
            'title' => 'Jurusan Sekolah',
            'active' => 'sekolah'
        ]);
    }

    public function kriteria()
    {
        return view('admin.kriteria', [
            'title' => 'Kriteria',
            'active' => 'kriteria'
        ]);
    }

    public function pertanyaan()
    {
        return view('admin.pertanyaan', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan'
        ]);
    }

}
