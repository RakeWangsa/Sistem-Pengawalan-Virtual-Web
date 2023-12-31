@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
    <h1>Riwayat Pengawalan</h1>
</div>
<section class="section dashboard">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">No PPK</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Status</th>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection