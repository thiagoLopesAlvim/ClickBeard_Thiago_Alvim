<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Lógica para o dashboard do admin
        return view('admin.dashboard');
    }
}
