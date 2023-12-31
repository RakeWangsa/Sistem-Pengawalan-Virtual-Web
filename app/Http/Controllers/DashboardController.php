<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash_petugas()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dash_petugas',
        ]);
    }

    public function riwayat_pengawalan()
    {
        return view('dashboard.riwayatPengawalan', [
            'title' => 'Riwayat Pengawalan',
            'active' => 'dash_petugas',
        ]);
    }
}
