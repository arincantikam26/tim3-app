<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login', [
            "title" => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        // dd($request);
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('inputError', 'Login Failed');
    }

    public function registrasi(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'is_permission' => 'required'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);

        return redirect('login')->with('success', "Registrasi Berhasil !! Silahkan Login.");
    }
}
