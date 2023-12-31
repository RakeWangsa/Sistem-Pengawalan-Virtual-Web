@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
    <div class="d-flex justify-content-between">
        <h1>Daftar IKI</h1>

        <div class="d-flex">
            <div class="dropdown me-3">
                <a class="btn btn-secondary" style="background-color:#176B87" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-plus-lg"></i> Tambah IKI
                </a>

                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href=""></a></li>

                    <li><a class="dropdown-item" href=""></a></li>

                </ul>
            </div>

            <div class="dropdown">
                <a class="btn btn-secondary" style="background-color:#176B87" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-clipboard"></i> Tampilan List
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href=""></a></li>

                </ul>
            </div>

        </div>
    </div>
</div>

@endsection