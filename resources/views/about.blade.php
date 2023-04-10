@extends('layout.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>About Us</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.instagram.com/p/CnQhWeZrG0s/" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>About Us</h3>
                        <p>
                            Rainbow Tour and Transport atau yang lebih dikenal sebagai Rainbow Travel ini merupakan
                            penyelenggara kegiatan perjalanan wisata dengan menawarkan paket dibeberapa lokasi wisata yang
                            banyak diminati oleh para wisatawan. Rainbow Travel bekerjasama dengan banyak perusahaan
                            transportasi yang sangat berpengalaman dalam bidangnya, akomodasi atau penginapan mulai dari
                            kelas melati hingga berbintang, restoran, hingga tour guide yang berlisensi.
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-building"></i>
                                <div>
                                    <h5>Why Us</h5>
                                    <p>Karena di Rainbow Travel ini bisa menyesuaikan kebutuhan yang anda inginkan, mulai
                                        dari pemilihan bus, destinasi wisata hingga pelayanan yang diberikan.
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-star"></i>
                                <div>
                                    <h5>Excellent Service</h5>
                                    <p>Merancang dan menyelenggarakan kegiatan untuk perusahaan, family gathering, studi
                                        tour, hingga ziarah wali.</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Customer Service</h5>
                                    <p>Pelayanan sesi konsultasi ataupun penawaran harga siap 1x24 jam.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <!-- End Stats Counter Section -->

        <!-- ======= Our Team Section ======= -->
        <!-- End Our Team Section -->

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
