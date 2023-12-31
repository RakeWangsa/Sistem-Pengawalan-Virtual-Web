@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
    <h1>Pengawalan</h1>
</div>
<section class="section dashboard">
    <div class="row col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="mt-4">
                    <!-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif -->
                </div>
                <form class="row g-3" method="GET" action="">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="no_aju" class="form-label">No Pengajuan :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="no_aju" name="no_aju" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="noppk" class="form-label">No PPK :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="no_ppk" name="no_ppk" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="jenis" class="form-label">Jenis :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="jenis" name="jenis" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="petugas" class="form-label">Petugas :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="petugas" name="petugas" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="tgl_kirim" class="form-label">Tanggal Pengiriman :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" id="tgl_kirim" name="tgl_kirim" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row kawal">
                                        <div class="col-md-6">
                                            <label for="tujuan" class="form-label">Tujuan :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="tujuan" name="tujuan" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-3"> <button type="submit" class="btn btn-primary">Submit</button> </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">No Pengajuan</th>
                        <th scope="col">Nomor PPK</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tanggal Pengiriman</th>
                        <th scope="col">Tujuan</th>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection