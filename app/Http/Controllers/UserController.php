<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $jurusan = Jurusan::count();
        $prodi = Prodi::count();

        return view('users.index', [
            'title' => 'Dashboard',
            'active' => 'user',
            'jurusan' => $jurusan,
            'prodi' => $prodi
        ]);
    }

    public function rekomendasi()
    {
        return view('users.rekomendasi', [
            'title' => 'Rekomendasi',
            'active' => 'cek_jurusan'
        ]);
    }
}