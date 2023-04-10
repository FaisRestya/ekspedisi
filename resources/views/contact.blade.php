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
                            <p>Pemesanan dan Informasi Lengkap. Silahkan Telepon / Whatsapp kontak admin berada dibawah.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4986.709183254433!2d112.72864568665953!3d-7.285807028964945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbed13402a2f%3A0x830a544e8f0fa28e!2sPakis%20III%20No.5%2Fa%2C%20Pakis%2C%20Kec.%20Sawahan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060256!5e0!3m2!1sen!2sid!4v1677761635498!5m2!1sen!2sid"
                        width="100%;" height="340px;" style="border:0;" frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4 mt-4">

                    <div class="col-lg-4">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Jalan Pakis 3 no 5a Bandar, Surabaya 60256</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-whatsapp flex-shrink-0"></i>
                            <div>
                                <h4>Whatsapp:</h4>
                                <p>+6285549080892</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+6281216777642</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                                    placeholder="Phone Number" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center mt-4"><button class="btn btn-primary " type="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
