<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\JurusanSekolah;
use App\Models\Preferensi;
use App\Models\Prodi;
use App\Models\User;
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

    public function preferensi()
    {
        return view('admin.preferensi.index', [
            'title' => 'Preferensi',
            'active' => 'preferensi',
            'preferensi' => Preferensi::all()
        ]);
    }

    public function pertanyaan()
    {
        return view('admin.pertanyaan', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan'
        ]);
    }

    public function profile() {
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.profile', [
            'title' => 'Profile',
            'active' => 'profile',
            'user' => $user
        ]);
    }
}