@extends('layout/layout')

@section('title', 'Users')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Axioo</span></h2>
                <p class="animate__animated animate__fadeInUp">Axioo Class Program adalah sebuah program pendidikan dalam menyiapkan tenaga terampil yang sesuai dengan kebutuhan industri lewat program sinkronisasi kurikulum, workshop berkelanjutan bagi guru, pembelajaran berbasis IT serta validasi sertifikasi bertaraf internasional.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Visi Axioo</h2>
                <p class="animate__animated animate__fadeInUp">Membantu dunia pendidikan di Indonesia menghasilkan lulusan yang siap kerja sehingga bisa bermanfaat baik bagi negara dan dunia industri.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Misi Axioo</h2>
                <p class="animate__animated animate__fadeInUp">Menjembatani dunia Pendidikan dengan industri IT nasional Indonesia melalui implementasi kelas industri didesain untuk meningkatkan kemampuan siswa dengan mensikronisasikan kurikulum industri dengan kurikulum sekolah yang bertujuan menghasilkan tenaga kerja siap pakai dan mandiri.</p>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Axioo Smart Classroom</a></h4>
                        <p class="description"> Penyiapan tenaga kerja di bidang digital melalui pelatihan-pelatihan coding dan digital. Pelatihan disesuaikan dengan kebutuhan industri.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Axioo Smart Campus</a></h4>
                        <p class="description">Ruang kelas abad 21, tempat mahasiswa kelas binaan axioo belajar pelajaran adaptif, normatif dan produktif di ruangan berbasis teknologi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Digital Development</a></h4>
                        <p class="description">Penyiapan tenaga kerja di bidang digital melalui pelatihan-pelatihan coding dan digital. Pelatihan disesuaikan dengan kebutuhan industri</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4 class="title"><a href="">Prakerin</a></h4>
                        <p class="description">Penyiapan tenaga kerja di bidang digital melalui pelatihan-pelatihan coding dan digital. Pelatihan disesuaikan dengan kebutuhan industri</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->

    <!-- ======= Services Section ======= -->


    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfoio Section ======= -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <p>Axioo Class Program adalah sebuah program pendidikan dalam menyiapkan tenaga terampil yang sesuai dengan kebutuhan industri lewat program sinkronisasi kurikulum, workshop berkelanjutan bagi guru, pembelajaran berbasis IT serta validasi sertifikasi bertaraf internasional. Program ini memberikan pelatihan terpadu kepada siswa dan guru.</p>
            </div>

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Muflikhah Isna</h4>
                            <span>Chief Executive Officer</span>
                            <p>Pengembangan skill untuk bertahan hidup</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Muflikhah Isna</h4>
                            <span>Product Manager</span>
                            <p>Pengembangan skill untuk bertahan hidup</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                <div class="col-lg-5">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Bandung, Jawa Barat, Indonesia 55982</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>axio@axioo.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 873 232 8798</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection