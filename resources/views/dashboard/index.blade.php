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
        <h1>Dashboard</h1>

        <a class="btn text-white" style="background-color:#176B87" href="/riwayat/pengawalan" role="button" aria-expanded="false">
            <i class="bi bi-clipboard"></i></i> Riwayat Pengawalan
        </a>

    </div>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row table-responsive">

            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection