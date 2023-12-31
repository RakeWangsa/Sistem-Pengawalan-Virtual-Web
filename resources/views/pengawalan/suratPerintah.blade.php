@extends('layouts.main')

@section('container')
<style>
    table {
        background-color: white;
        margin-left: 10px;
    }

    .dashboard .absen-card {
        margin-bottom: 15px;
    }

    .card-title {
        margin-bottom: 0;
    }

    .surat-perintah {
        background-color: #176B87;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        border-radius: 20px;
        margin: 20px 20px 5px 20px;
        padding: 10px;
    }

    .modal-content a:hover {
        color: black;
    }
</style>

<div class="pagetitle mt-3">
    <h1>Surat Perintah Pengawalan</h1>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">No Pengajuan</th>
                        <th scope="col">No PPK</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center"></th>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <a class="btn" style="border-radius: 100px; background-color:#176B87;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-clipboard-check-fill text-white"></i></i></a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="border-radius: 20px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">E/E/01.0/20230123/002464</h5>
                                </div>
                                <a class="btn surat-perintah mt-4" href="/uji/organoleptik" role="button" aria-expanded="false">Uji Organoleptik</a>
                                <a class="btn surat-perintah" href="/input/dokumentasi" role="button" aria-expanded="false">Dokumentasi</a>
                                <a class="btn surat-perintah" href="/verifikasi/dokumentasi" role="button" aria-expanded="false">Verifikasi</a>
                                <a class="btn surat-perintah mb-4" href="/laporan/pengawalan" role="button" aria-expanded="false">Laporan Pengawalan</a>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection