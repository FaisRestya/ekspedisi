@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Pesanan Sewa Elf</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Pesanan Sewa Elf</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Edit Pesanan
            </div>
            <div class="card-body">
                <form action="/edt-pesanan-elf/{{ $pesananElf->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="startDate">Dari Tanggal</label>
                            <input type="date" name="startDate" class="form-control" id="startDate" value="{{ date('Y-m-d', strtotime($pesananElf->startDate)) }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="endDate">Sampai Tanggal</label>
                            <input type="date" name="endDate" class="form-control" id="endDate" value="{{ date('Y-m-d', strtotime($pesananElf->endDate)) }}" required>
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
                            @if ($pesananElf->tipe == "Medium")
                                <option value="Medium" selected>Medium Mercedes Benz ( 16 seat) </option>
                                <option value="Big">Big Mercedes Benz( 19 seat)</option>
                                <option value="Long">Long BMW ( 20 seat)</option>
                            @elseif ($pesananElf->tipe == "Long")
                                <option value="Medium">Medium Mercedes Benz ( 16 seat) </option>
                                <option value="Big" >Big Mercedes Benz( 19 seat)</option>
                                <option value="Long" selected>Long BMW ( 20 seat)</option>
                            @else
                            <option value="Medium">Medium Mercedes Benz ( 16 seat) </option>
                            <option value="Big" selected>Big Mercedes Benz( 19 seat)</option>
                            <option value="Long" >Long BMW ( 20 seat)</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" value="{{ $pesananElf->harga }}" readonly required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" value="{{ $pesananElf->tujuan }}" id="tujuan" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="jmlOrang">Jumlah Penumpang</label>
                        <input type="number" name="jmlOrang" class="form-control" id="jmlOrang" value="{{ $pesananElf->jmlOrang }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="konsumen">Nama Booking</label>
                        <input type="text" name="konsumen" class="form-control" id="konsumen" value="{{ $pesananElf->konsumen }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="phoneNumber">Nomer Telefon</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value="{{ $pesananElf->phoneNumber }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pesananElf->alamat }}" required>
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
            if (type == "Long") {
                harga = 500000
            }
            $("#harga").val(harga)
        });
    </script>
@endsection
