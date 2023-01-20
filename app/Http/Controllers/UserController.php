<?php

namespace App\Http\Controllers;

use App\Models\JurusanSekolah;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function profile() {
        $id = Auth::id();
        $user = User::find($id);
        return view('users.profile', [
            'title' => 'Profile',
            'active' => 'profile',
            'user' => $user
            
        ]);
    }

}