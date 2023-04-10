@extends('layout.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Contact</h2>
                            <p>Pemesanan dan Informasi Lengkap. Silahkan isi formulir dibawah / jika ada yang ditanyakan silahkan Whatsapp kontak admin berada dibawah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Tambah Pesanan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <h1>Form Private Tour</h1>

                <div class="row gy-4 mt-1">

                    <div class="col-lg-8">
                        <form action="/tbh-private-tour" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="startDate">Dari Tanggal</label>
                                    <input type="date" name="startDate" class="form-control" id="startDate" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="mb-2" for="endDate">Sampai Tanggal</label>
                                    <input type="date" name="endDate" class="form-control" id="endDate" required>
                                </div>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="category">Kategori</label>
                                <input type="text" name="category" class="form-control" id="category" value="Elf / Bus"
                                    readonly>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="tipe">Tipe</label>
                                <select class="form-control" name="tipe" id="tipe">
                                    <option value="">== Pilih Tipe ==</option>
                                    <option value="Medium">Short Elf ( 16 seat) </option>
                                    <option value="Big">Long Elf ( 19 seat)</option>
                                    <option value="Medium">Medium Bus ( 30 - 35 seat)</option>
                                    <option value="Big">Big Bus ( 45 - 59 seat)</option>
                                </select>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="tujuan">Tujuan</label>
                                <input type="text" name="tujuan" class="form-control" id="tujuan" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="jmlOrang">Jumlah Penumpang</label>
                                <input type="number" name="jmlOrang" class="form-control" id="jmlOrang" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="konsumen">Nama Booking</label>
                                <input type="text" name="konsumen" class="form-control" id="konsumen" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="phoneNumber">Nomer Telefon</label>
                                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label class="mb-2" for="fotoKtp">Foto Ktp</label>
                                <input type="file" name="fotoKtp" class="form-control" id="fotoKtp" required>
                            </div>
                            <button class="btn btn-primary mt-4 " type="submit">Booking Now</button>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
