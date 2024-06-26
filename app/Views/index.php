<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEO Master - SEO Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

    <style>
        .image-link:hover img {
            transform: scale(1.3);
            /* Membesarkan gambar saat dihover */
            transition: transform 0.3s ease;
            /* Efek transisi saat perubahan ukuran */
        }

        .description {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 2;
            /* Batasi hingga dua baris */
            height: 3.5em;
            /* Sesuaikan dengan tinggi dua baris teks */
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>AJAY<span class="fs-5">News</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="https://aceh.tribunnews.com/nanggroe" target="blank"
                            class="nav-item nav-link">Nanggroe</a>
                        <a href="https://aceh.tribunnews.com/politik" class="nav-item nav-link">Politik</a>
                        <a href="https://aceh.tribunnews.com/bisnis" class="nav-item nav-link">Bisnis</a>
                        <a href="https://aceh.tribunnews.com/sport" class="nav-item nav-link">Sport</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                            <div class="dropdown-menu m-0">
                                <a target="blank" href="https://aceh.tribunnews.com/seleb"
                                    class="dropdown-item">Seleb</a>
                                <a target="blank" href="https://aceh.tribunnews.com/travel"
                                    class="dropdown-item">Travel</a>
                                <a target="blank" href="https://aceh.tribunnews.com/lifestyle"
                                    class="dropdown-item">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://aceh.tribunnews.com/info-iklan/"
                        class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Jasa Iklan</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Kabar lengkap terkini seputar ACEH JAYA dan
                                CALANG</h1>
                            <p class="text-white pb-3 animated zoomIn">Dapatkan liputan eksklusif, analisis mendalam,
                                dan beragam topik menarik yang mencakup politik, ekonomi, budaya, dan masih banyak lagi.
                                Situs Anda untuk mengikuti jejak peristiwa terbaru dan merangkum informasi penting yang
                                relevan dengan kualitas dan keberimbangan yang tinggi</p>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href=""
                                class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                                Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="<?= base_url('assets/img/hero.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Langganan berita terbaru</h3>
                        <small class="text-white">Dapatkan akses eksklusif ke konten premium, artikel terbaru, dan
                            pembaruan langsung ke kotak masuk Anda.</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;"
                            src="<?= base_url('assets/img/newsletter.png') ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Terkini</h6>
                    <h2 class="mt-2">Kabar Aceh Jaya Calang</h2>
                </div>
                <div class="row g-4">
                    <?php foreach (array_merge($news1, $news2) as $item): ?>
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" width="120" height="90">
                                </div>
                                <h5 class="mb-3"><?= $item['title'] ?></h5>
                                <p class="description"><?= $item['description'] ?></p>
                                <a class="btn px-3 mt-auto mx-auto" href="<?= $item['link'] ?>" target="_blank">Read
                                    More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Klasifikasi Berita</h6>
                    <h2 class="mt-2">Kabar Khsus Terkini</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter=".second">Calang</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Aceh Jaya</li>
                            <li class="btn px-3 pe-4" data-filter="*">Semua</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <?php foreach ($news1 as $item): ?>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                            <div class="position-relative rounded overflow-hidden">
                                <img class="img-fluid w-100" src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>"
                                    width="120" height="90">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light" href="<?= $item['link'] ?>" target="_blank">read more</a>
                                    <div class="mt-auto">
                                        <small class="text-white"><i
                                                class="fa fa-folder me-2"></i><?= $item['description'] ?></small>
                                        <a class="h5 d-block text-white mt-1 mb-0" href=""><?= $item['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($news2 as $item): ?>
                        <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                            <div class="position-relative rounded overflow-hidden">
                                <img class="img-fluid w-100" src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>"
                                    width="120" height="90">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light" href="<?= $item['link'] ?>" target="_blank">read more</a>
                                    <div class="mt-auto">
                                        <small class="text-white"><i
                                                class="fa fa-folder me-2"></i><?= $item['description'] ?></small>
                                        <a class="h5 d-block text-white mt-1 mb-0" href=""><?= $item['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->



        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('assets/img/team-1.jpg') ?>"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Muhammad Syuhada</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('assets/img/team-2.jpg') ?>"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Emma William</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('assets/img/team-3.jpg') ?>"
                                    alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Noah Michael</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Darul Imarah, Aceh Besar</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62813 6152 7454</p>
                        <p><i class="fa fa-envelope me-3"></i>msyuhadaramlan@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" target="blank" href="https://www.tribunnews.com/about/">About
                            Us</a>
                        <a class="btn btn-link" target="blank" href="https://aceh.tribunnews.com/contact-us/">Contact
                            Us</a>
                        <a class="btn btn-link" target="blank" href="https://www.tribunnews.com/privacy-policy/">Privacy
                            Policy</a>
                        <a class="btn btn-link" target="blank" href="https://www.tribunnews.com/pedoman/">Pedoman
                            Media Siber</a>
                        <a class="btn btn-link" target="blank" href="https://aceh.tribunnews.com/terms/">Terms &
                            Condition</a>
                        <a class="btn btn-link" target="blank" href="https://aceh.tribunnews.com/redaksi/">Redaksi</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Latest News</h5>
                        <div class="row g-2">
                            <?php
                            $counter = 0; // Inisialisasi variabel counter
                            foreach (array_merge($news1, $news2) as $item):
                                if ($counter < 9): // Batasi pengulangan hanya sampai 6 kali
                                    ?>
                                    <div class="col-4">
                                        <a href="<?= $item['link'] ?>" target="_blank" class="image-link">
                                            <img class="img-fluid" src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
                                        </a>
                                    </div>
                                    <?php
                                    $counter++; // Tambahkan nilai counter setiap kali melakukan iterasi
                                endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Info Iklan</h5>
                        <p><strong>PT Aceh Media Grafika</strong> - Jalan Raya Lambaro, Km 4,5 Desa Meunasah Manyang,
                            Kecamatan Ingin Jaya
                            Kabupaten Aceh Besar, Aceh 23371</p>

                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">2024 TRIBUNnews.com</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            A subsidiary of <a class="border-bottom" href="https://www.kgmedia.id">KG Media</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>


</body>

</html>