@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Booking Ziarah Wali</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Daftar Booking Ziarah Wali</li>
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
                            <th>Nama Instansi</th>
                            <th>Nomor Telefon</th>
                            <th>Alamat Instansi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Dari & Sampai Tanggal</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Tujuan</th>
                            <th>Jumlah Penumpang</th>
                            <th>Nama Instansi</th>
                            <th>Nomor Telefon</th>
                            <th>Alamat Instansi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dftZiarahWali as $item)
                            <tr>
                                <td>{{ $item->startDate }} {{ $item->endDate}}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->tipe }}</td>
                                <td>{{ $item->tujuan }}</td>
                                <td>{{ $item->jmlOrang }}</td>
                                <td>{{ $item->konsumen }}</td>
                                <td>{{ $item->phoneNumber }}</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
