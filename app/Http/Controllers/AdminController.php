<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 🟢 TAMBAHKAN METHOD INDEX INI
    public function index()
    {
        // Pastikan view 'admin.dashboard' sesuai dengan lokasi file dashboard.blade.php kamu
        // (misal: resources/views/admin/dashboard.blade.php)
        return view('admin.dasbor'); 
    }
}