@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Layanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Layanan
            </div>
            <div class="card-body">
                <form class="row g-3" action="/tbh-service" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Fasilitas</label>
                        <textarea class="form-control" name="fasilitas" id="fasilitas" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ url('/list-service') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
