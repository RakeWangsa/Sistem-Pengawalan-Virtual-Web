<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengawalanController extends Controller
{
    public function surat_perintah()
    {
        return view('pengawalan.suratPerintah', [
            'title' => 'Pengawalan',
            'active' => 'surat_perintah',
        ]);
    }

    public function pengajuan()
    {
        return view('pengawalan.pengajuan', [
            'title' => 'Pengawalan',
            'active' => 'pengajuan',
        ]);
    }

    public function laporan()
    {
        return view('pengawalan.laporan', [
            'title' => 'Laporan Pengawalan',
            'active' => 'surat_perintah',
        ]);
    }
}
