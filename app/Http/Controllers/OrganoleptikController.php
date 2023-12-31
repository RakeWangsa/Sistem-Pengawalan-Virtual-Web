<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganoleptikController extends Controller
{
    public function hasil_uji()
    {
        return view('organoleptik.hasilUji', [
            'title' => 'Hasil Uji',
            'active' => 'organoleptik',
            'active' => 'hasil_uji',
        ]);
    }

    public function input_parameter()
    {
        return view('organoleptik.inputParameter', [
            'title' => 'Input Parameter',
            'active' => 'organoleptik',
            'active' => 'input_parameter',
        ]);
    }

    public function form()
    {
        return view('organoleptik.form', [
            'title' => 'Form Organoleptik',
            'active' => 'organoleptik',
        ]);
    }

    public function uji()
    {
        return view('organoleptik.uji', [
            'title' => 'Uji Organoleptik',
            'active' => 'surat_perintah',
        ]);
    }
}
