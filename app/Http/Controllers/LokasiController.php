<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function lokasi_iki()
    {
        return view('lokasi.iki', [
            'title' => 'Lokasi IKI',
            'active' => 'lokasi_iki',
        ]);
    }

    public function maps_lokasi()
    {
        return view('lokasi.maps', [
            'title' => 'Lokasi IKI',
            'active' => 'lokasi_iki',
        ]);
    }
}
