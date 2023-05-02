@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Pesanan Sewa Bus</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Pesanan Sewa Bus</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Edit Pesanan
            </div>
            <div class="card-body">
                <form action="/edt-pesanan/{{ $pesananBus->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="startDate">Dari Tanggal</label>
                            <input type="date" name="startDate" class="form-control" id="startDate" value="{{ date('Y-m-d', strtotime($pesananBus->startDate)) }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="endDate">Sampai Tanggal</label>
                            <input type="date" name="endDate" class="form-control" id="endDate" value="{{ date('Y-m-d', strtotime($pesananBus->endDate)) }}" required>
                        </div>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="category">Kategori</label>
                        <input type="text" name="category" class="form-control" id="category" value="Bus"
                            readonly>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="tipe">Tipe</label>
                        <select class="form-control" name="tipe" id="tipe">
                            <option value="">== Pilih Tipe ==</option>
                            @if ($pesananBus->tipe == "Medium")
                                <option value="Medium" selected>Medium ( 30-35 seat) </option>
                                <option value="Big">Big( 45-59 seat)</option>
                            @else
                                <option value="Medium">Medium ( 30-35 seat) </option>
                                <option value="Big" selected>Big( 45-59 seat)</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" value="{{ $pesananBus->harga }}" readonly required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" value="{{ $pesananBus->tujuan }}" id="tujuan" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="jmlOrang">Jumlah Penumpang</label>
                        <input type="number" name="jmlOrang" class="form-control" id="jmlOrang" value="{{ $pesananBus->jmlOrang }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="konsumen">Nama Booking</label>
                        <input type="text" name="konsumen" class="form-control" id="konsumen" value="{{ $pesananBus->konsumen }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="phoneNumber">Nomer Telefon</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value="{{ $pesananBus->phoneNumber }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pesananBus->alamat }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="fotoKtp">Foto Ktp</label>
                        <input type="file" name="fotoKtp" class="form-control" id="fotoKtp">
                    </div>
                    <button class="btn btn-primary mt-4 " type="submit">Edit Pesanan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#tipe').change(function() {
            var type = $(this).val();
            var harga = 0;
            if (type != '') {
               harga = 0
            } if (type == "Medium") {
                harga = 150000
            } if (type == "Big") {
                harga = 300000
            }
            $("#harga").val(harga)
        });
    </script>
@endsection
