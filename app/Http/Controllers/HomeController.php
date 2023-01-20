<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $jurusan = Jurusan::all();
        return view('home.index', [
            'title' => 'Home',
            'active' => 'home',
            'datajurusan' => $jurusan
        ]);
    }

    public function prodi()
    {
        return view('home.prodi', [
            'title' => 'Prodi',
            'prodi' => Jurusan::with('prodis')->latest()->get(),
            'active' => 'prodi'
        ]);
    }

    public function jurusan()
    {
        return view('home.jurusan', [
            'title' => 'Jurusan',
            'jurusan' => Jurusan::all(),
            'active' => 'jurusan'
        ]);
    }
}