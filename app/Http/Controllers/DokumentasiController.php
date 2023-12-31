<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function input()
    {
        return view('dokumentasi.input', [
            'title' => 'Input Dokumentasi',
            'active' => 'surat_perintah',
        ]);
    }

    public function verifikasi()
    {
        return view('dokumentasi.verifikasi', [
            'title' => 'Verifikasi Dokumentasi',
            'active' => 'surat_perintah',
        ]);
    }
}
