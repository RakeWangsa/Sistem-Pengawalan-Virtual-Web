<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengawalanController;
use App\Http\Controllers\OrganoleptikController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\ManagementController;

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'ceklevel:petugas']], function () {
    route::get('/petugas/dashboard', [DashboardController::class, 'dash_petugas']);
    route::get('/pengawalan', [PengawalanController::class, 'surat_perintah']);
    route::get('/riwayat/pengawalan', [DashboardController::class, 'riwayat_pengawalan']);
    route::get('/uji/organoleptik', [OrganoleptikController::class, 'uji']);
    route::get('/input/dokumentasi', [DokumentasiController::class, 'input']);
    route::get('/verifikasi/dokumentasi', [DokumentasiController::class, 'verifikasi']);
    route::get('/laporan/pengawalan', [PengawalanController::class, 'laporan']);
});

Route::group(['middleware' => ['auth', 'ceklevel:operator']], function () {
    route::get('/aju/pengawalan', [PengawalanController::class, 'pengajuan']);
    route::get('/hasil-uji/organoleptik', [OrganoleptikController::class, 'hasil_uji']);
    route::get('/input-parameter/organoleptik', [OrganoleptikController::class, 'input_parameter']);
    route::get('/form/organoleptik', [OrganoleptikController::class, 'form']);
    route::get('/daftar/lokasi ', [LokasiController::class, 'lokasi_iki']);
    route::get('/maps/lokasi ', [LokasiController::class, 'maps_lokasi']);
});
