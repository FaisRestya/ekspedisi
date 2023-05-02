@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Pesanan Sewa Bus</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Daftar Pesanan Sewa Bus</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Pesanan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Dari & Sampai Tanggal</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Tujuan</th>
                            <th>Jumlah Penumpang</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor Telefon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Dari & Sampai Tanggal</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Tujuan</th>
                            <th>Jumlah Penumpang</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor Telefon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dftPesanan as $item)
                            <tr>
                                <td>{{ $item->startDate }} {{ $item->endDate}}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->tipe }}</td>
                                <td>{{ $item->tujuan }}</td>
                                <td>{{ $item->jmlOrang }}</td>
                                <td>{{ $item->konsumen }}</td>
                                <td>{{ $item->phoneNumber }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="/dft-pesanan/delete/{{ $item->id }}" class="btn btn-danger btn-sm ">
                                        Hapus
                                    </a>
                                    <a href="/dft-pesanan/edit/{{ $item->id }}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
