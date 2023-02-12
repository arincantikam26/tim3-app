<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perform()
    {
        //untuk menghapus semua nilai pada session
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
