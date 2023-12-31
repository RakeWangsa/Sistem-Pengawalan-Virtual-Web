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

    .btn-close {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        margin-top: 15px;
        margin-right: 20px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm5A5dHGOqN8AomT00le5tmX1B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-aZl6P8FjuC3MqCHFDd/UJPTKKTRJ3dElSOlEK3TVc+O51FsrMXkHkKKn2O39kA5k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-9aIt2nRp6rIvoUubm6I2zW3+TwzPblRr5+2XnOMwI9cTcQ1VXotMfK7R8RHLN6u" crossorigin="anonymous"></script>

<div class="pagetitle mt-3">
    <div class="d-flex justify-content-between">
        <h1>Parameter Organoleptik</h1>

        <div class="dropdown">
            <a class="btn dropdown-toggle" style="background-color:#176B87" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Komoditi
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="">Udang Beku</a></li>
                <li><a class="dropdown-item" href="">Ikan Beku</a></li>
                <li><a class="dropdown-item" href="">Sotong</a></li>
            </ul>
        </div>
    </div>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Parameter</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A. Dalam Keadaan Beku</td>
                            <td></td>
                            <td class="text-center">
                                <a class="btn" style="border-radius: 100px; background-color:#176B87;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square text-white"></i></a>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Input Parameter Organoleptik</h5>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="parameter">Parameter</label>
                                                <input type="text" class="form-control" id="parameter" name="parameter" value="" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nilai">Masukkan Nilai</label>
                                                <input type="number" class="form-control" id="nilai" name="nilai" value="" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection