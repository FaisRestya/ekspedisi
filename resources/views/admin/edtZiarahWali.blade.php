@extends('layout.admin')

@section('admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Ziarah Wali</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Pesanan Ziarah Wali</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Edit Pesanan
            </div>
            <div class="card-body">
                <form action="/edt-ziarah-wali/{{ $dftZiarahWali->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="startDate">Dari Tanggal</label>
                            <input type="date" name="startDate" class="form-control" id="startDate" value="{{ date('Y-m-d', strtotime($dftZiarahWali->startDate)) }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="mb-2" for="endDate">Sampai Tanggal</label>
                            <input type="date" name="endDate" class="form-control" id="endDate" value="{{ date('Y-m-d', strtotime($dftZiarahWali->endDate)) }}" required>
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
                            @if ($dftZiarahWali->tipe == "ShortElf")
                            <option value="ShortElf" selected>Short Elf ( 16 seat) </option>
                            <option value="LongElf">Long Elf ( 19 seat)</option>
                            <option value="MediumBus">Medium Bus ( 30 - 35 seat)</option>
                            <option value="BigBus">Big Bus ( 45 - 59 seat)</option>
                            <option value="LongBmw">Long BMW ( 20 seat)</option>
                            @elseif ($dftZiarahWali->tipe == "LongElf")
                            <option value="ShortElf">Short Elf ( 16 seat) </option>
                            <option value="LongElf" selected>Long Elf ( 19 seat)</option>
                            <option value="MediumBus">Medium Bus ( 30 - 35 seat)</option>
                            <option value="BigBus">Big Bus ( 45 - 59 seat)</option>
                            <option value="LongBmw">Long BMW ( 20 seat)</option>
                            @elseif ($dftZiarahWali->tipe == "MediumBus")
                            <option value="ShortElf">Short Elf ( 16 seat) </option>
                            <option value="LongElf">Long Elf ( 19 seat)</option>
                            <option value="MediumBus" selected>Medium Bus ( 30 - 35 seat)</option>
                            <option value="BigBus">Big Bus ( 45 - 59 seat)</option>
                            <option value="LongBmw">Long BMW ( 20 seat)</option>
                            @elseif ($dftZiarahWali->tipe == "BigBus")
                            <option value="ShortElf">Short Elf ( 16 seat) </option>
                            <option value="LongElf">Long Elf ( 19 seat)</option>
                            <option value="MediumBus">Medium Bus ( 30 - 35 seat)</option>
                            <option value="BigBus" selected>Big Bus ( 45 - 59 seat)</option>
                            <option value="LongBmw">Long BMW ( 20 seat)</option>
                            @else
                            <option value="ShortElf">Short Elf ( 16 seat) </option>
                            <option value="LongElf">Long Elf ( 19 seat)</option>
                            <option value="MediumBus">Medium Bus ( 30 - 35 seat)</option>
                            <option value="BigBus">Big Bus ( 45 - 59 seat)</option>
                            <option value="LongBmw" selected>Long BMW ( 20 seat)</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" value="{{ $dftZiarahWali->harga }}" readonly required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" value="{{ $dftZiarahWali->tujuan }}" id="tujuan" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="jmlOrang">Jumlah Penumpang</label>
                        <input type="number" name="jmlOrang" class="form-control" id="jmlOrang" value="{{ $dftZiarahWali->jmlOrang }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="konsumen">Nama Booking</label>
                        <input type="text" name="konsumen" class="form-control" id="konsumen" value="{{ $dftZiarahWali->konsumen }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="phoneNumber">Nomer Telefon</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value="{{ $dftZiarahWali->phoneNumber }}" required>
                    </div>
                    <div class="mt-3 form-group">
                        <label class="mb-2" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $dftZiarahWali->alamat }}" required>
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
            } if (type == "ShortElf") {
                harga = 150000
            } if (type == "LongElf") {
                harga = 300000
            }
            if (type == "MediumBus") {
                harga = 500000
            }
            if (type == "BigBus") {
                harga = 700000
            }
            if (type == "LongBmw") {
                harga = 400000
            }
            $("#harga").val(harga)
        });
    </script>
@endsection
