<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (checkPermission(['admin'])) {
            return redirect()->route('dashboard-admin');
        } elseif (checkPermission(['user'])) {
            return redirect()->route('dashboard-user');
        }
    }
}