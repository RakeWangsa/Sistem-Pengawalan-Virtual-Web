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
</style>

<div class="pagetitle mt-3">
    <div class="d-flex justify-content-between">
        <h1>Daftar IKI</h1>

        <a class="btn btn-secondary" style="background-color:#176B87" href="/maps/lokasi" role="button" aria-expanded="false">
            <i class="bi bi-map"></i> Tampilan Maps
        </a>

    </div>
</div>

<section class="section dashboard" style="height:100vh">
    <div class="row">
        <div class="col-lg-12">
            <div class="row table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">IKI</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Koordinat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection