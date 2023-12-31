@extends('layouts.main')

@section('container')
<style>
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

<div class="pagetitle mt-3">
    <h1>Verifikasi Dokumentasi</h1>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nomor PPK</th>
                        <th scope="col">Dokumentasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center"></th>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <a class="btn" style="border-radius: 100px; background-color:#176B87;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square text-white"></i></a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Input Status Dokumentasi</h5>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="no_ppk">No PPK</label>
                                            <input type="text" class="form-control" id="no_ppk" name="no_ppk" value="" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select id="status" class="form-select" name="status">
                                                <option>Pilih Status</option>
                                                <option value="verified">Verified</option>
                                                <option value="waiting">Waiting</option>
                                                <option value="failed">Failed</option>
                                            </select>
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
</section>
@endsection