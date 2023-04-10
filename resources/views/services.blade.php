@extends('layout.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Services</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-bus"></i></div>
                        <div>
                            <h4 class="title">Melayani Sewa Bus & Elf</h4>
                            <p class="description">Menyediakan sewa kendaraan untuk keperluan anda dalam perjalanan luar
                                kota </p>
                            <a href="service-details.html" class="#"></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-suitcase-rolling"></i></div>
                        <div>
                            <h4 class="title">Melayani Paket Wisata</h4>
                            <p class="description">Menyediakan paket wisata yang bisa dipilih sesuai kebutuhan anda</p>
                            <a href="service-details.html" class="#"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-place-of-worship"></i></i></div>
                        <div>
                            <h4 class="title">Melayani Ziarah Wali</h4>
                            <p class="description">Menyediakan paket ziarah wali songo</p>
                            <a href="service-details.html" class="#"></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Sewa Bus</a></h3>
                            <p>Menyediakan Medium Bus 30 - 35 seat dan Big Bus 45 - 59 seat.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Sewa Elf</a></h3>
                            <p>Menyediakan Elf short 16 seat dan Elf Long 19 seat.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Private Tour</a></h3>
                            <p>Menyediakan wisata khusus untuk family gathering dan Outing.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Studi Tour</a></h3>
                            <p>Menyediakan paket untuk organisasi, perusahaan ataupun sebuah instansi.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/packaging-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Paket Wisata</a></h3>
                            <p>Menyediakan beragam destinasi yang bisa dipilih sesuai dengan kebutuhan anda.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/warehousing-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Paket Ziarah Wali</a></h3>
                            <p>Menyediakan paket wisata religi untuk berziarah ke Wali Songo.</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Paket Wisata Batu</h3>
                        <p class="fst-italic">
                            Kota Batu adalah sebuah kota di Provinsi Jawa Timur, Indonesia terbentuk pada tahun 2001 sebagai
                            pecahan dari Kabupaten Malang.
                        </p>
                        <ul>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Paket Wisata Bromo</h3>
                        <p class="fst-italic">
                            Nama Bromo sendiri diambil dari kata “Brahma” bahasa sanskerta yaitu dewa pertama agama hindu.
                            Yang menarik dari gunung ini adalah bentuknya yang bertautan antara lembah dan ngarai dengan
                            lautan pasir yang memiliki luas 10 km persegi.
                        </p>
                        <p>
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Paket Wisata Jogja</h3>
                        <p>Yogyakarta berarti Yogya yang kerta, Yogya yang makmur, sedangkan Ngayogyakarta Hadiningrat
                            berarti Yogya yang makmur dan yang paling utama.</p>
                        <ul>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Paket Wisata Bali</h3>
                        <p class="fst-italic">
                            Kata 'Bali' sebagai nama pulau maupun untuk menyebutkan yang lain merupakan kata yang berasal
                            dari Bahasa Sansekerta yang artinya "kekuatan yang maha agung"
                        </p>
                        <p>
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img"
                                    alt="">
                                <h3>M.Haikal</h3>
                                <h4></h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Pelayanan Mantab
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img"
                                    alt="">
                                <h3>Satria R</h3>
                                <h4></h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Senang sekali bisa menggunakan layanan tour di Rainbow Travel ini, Harganya murah dan
                                    pelayanan yang diberikan sangat TOP.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img"
                                    alt="">
                                <h3>Shinta</h3>
                                <h4></h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Pengalaman yang tidak akan pernah terlupakan karena telah menggunakan jasa travel
                                    Rainbow ini, service yang diberikan sangat bagus dan baik
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img"
                                    alt="">
                                <h3>Akbar Soni</h3>
                                <h4></h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Admin sangat ramah dan informatif serta pelayanan trip sangat recommend
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img"
                                    alt="">
                                <h3>Ryan Prakarsa</h3>
                                <h4></h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Perjalanan sangat seru sekali dan bisa bebas menentukan destinasi wisata sesuai yang
                                    kita inginkan , semoga sukses selalu!!!
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Frequently Asked Questions</span>
                    <h2>Frequently Asked Questions</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Easy Order Proses
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Rainbow Travel memberikan Anda kebebasan untuk memilih paket wisata dan rencana
                                        perjalanan yang kami tawarkan fleksibel sesuai dengan kebutuhan Anda. Pesan
                                        perjalanan Anda bersama kami dan pilih atau kirimkan permintaan khusus Anda kepada
                                        kami.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Best Service
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Kami akan memberikan pelayanan terbaik mulai dari booking hingga pelaksanaan tour.
                                        Kepuasan anda adalah kebanggaan terbesar bagi pelayanan kami.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Best Price
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Harga yang kami berikan merupakan harga terbaik dikelasnya sesuai dengan kebutuhan
                                        anda. Dapatkan harga terbaik di setiap liburan Anda bersama kami.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        The Legality of the Company
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        PT. Danakirti Berlian Travelindo atau Rainbow Tour and Transport adalah biro
                                        perjalanan yang berbadan hukum.
                                        Kami selalu membuat liburan anda nyaman, aman dan menyenangkan
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Experienced
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Kami adalah memiliki Tour Operator yang telah berpengalaman melayani banyak
                                        wisatawan. Kami memiliki tim Tour Leader yang berpengalaman di
                                        bidangnya untuk menemani Anda selama berlibur bersama kami.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
