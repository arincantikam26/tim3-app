<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'title' => 'Home',
            'active' => 'admin'
        ]);
    }

    public function jurusan() {
        return view('admin.jurusan', [
            'title' => 'Jurusan',
            'active' => 'jurusan'
        ]);
    }

    public function prodi() {
        return view('admin.prodi', [
            'title' => 'Program Studi',
            'active' => 'prodi'
        ]);
    }

    public function sekolah() {
        return view('admin.sekolah', [
            'title' => 'Jurusan Sekolah',
            'active' => 'sekolah'
        ]);
    }

    public function kriteria() {
        return view('admin.kriteria', [
            'title' => 'Kriteria',
            'active' => 'kriteria'
        ]);
    }

    public function pertanyaan() {
        return view('admin.pertanyaan', [
            'title' => 'Pertanyaan',
            'active' => 'pertanyaan'
        ]);
    }

    public function user() {
        return view('admin.user', [
            'title' => 'Pengguna',
            'active' => 'user',
            'user' => User::all()
        ]);
    }
    




}
