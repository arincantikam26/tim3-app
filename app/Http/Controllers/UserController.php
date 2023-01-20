<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\JurusanSekolah;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

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

        return view('users.index', [
            'title' => 'Dashboard',
            'active' => 'user',
            'jurusan' => JurusanSekolah::all()
        ]);
    }

    public function rekomendasi()
    {
        return view('users.rekomendasi', [
            'title' => 'Rekomendasi',
            'active' => 'cek_jurusan'
        ]);
    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('users.profile', [
            'title' => 'Profile',
            'active' => 'profile',
            'user' => $user

        ]);
    }

    public function jurusan()
    {
        return view('users.jurusan.index', [
            'title' => 'Jurusan',
            'active' => 'jurusan',
            'jurusan' => Jurusan::all()
        ]);
    }

    public function prodi()
    {
        return view('users.prodi.index', [
            'title' => 'Program Studi',
            'active' => 'prodi',
            'prodi' => Jurusan::all(),

        ]);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('user-profile')->with('success', 'Data Berhasil Diupdate');
    }

    public function jurusan_sekolah()
    {
        return view('users.jurusan_sekolah.index', [
            'title' => 'Jurusan Sekolah',
            'active' => 'jurusan-sekolah',
            'jurusan' => JurusanSekolah::all()
        ]);
    }
}