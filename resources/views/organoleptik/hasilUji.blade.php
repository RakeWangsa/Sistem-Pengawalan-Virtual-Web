@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
    <h1>Hasil Uji Organoleptik</h1>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">No Pengajuan</th>
                        <th scope="col">Nomor PPK</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tanggal Pengiriman</th>
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
                            <a href="/form/organoleptik" class="btn" style="border-radius: 100px; background-color:#176B87;"><i class="bi bi-clipboard-check-fill text-white"></i></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection