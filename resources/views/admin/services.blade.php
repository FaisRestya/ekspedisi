@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Daftar Layanan</li>
        </ol>
        <a href="{{ url('/tbh-service') }}" class="btn btn-primary mb-3"> Tambah Layanan</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Layanan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Fasilitas</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($listService as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->fasilitas }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->gambar }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
