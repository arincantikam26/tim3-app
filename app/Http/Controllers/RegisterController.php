<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register', [
            "title" => 'Register'
        ]);
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        // auth()->login($user);

        return redirect('login')->with('success', "Registrasi Berhasil !! Silahkan Login.");
    }
}