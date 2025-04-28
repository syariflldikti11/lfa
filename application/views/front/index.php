<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LFA - Biro Jasa Pengurusan Surat Kendaraan Bermotor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="<?= base_url(); ?>/assetsback/img/logo.jpg" alt="">LFA</h1>
        </a>
      
       
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url();?>assets/img/bg2.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">CV. Lubna Faeyza Alfarizqy</h1>
                                    <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Kami berkomitmen memberikan kemudahan pemenuhan kewajiban untuk pembayaran pajak kendaraan bermotor</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <!--       <div class="carousel-item">
                    <img class="w-100" src="<?= base_url();?>assets/img/pelanggan.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Pasar dan Klien</h1>
                                    <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Kami melayani berbagai sektor, seperti sektor pembiayaan (leasing), sektor pertambangan, sektor perkebunan, sektor pemerintahan, sektor otomotif dan klien perorangan</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">Visi Kami</h1>
                       
                        <p class="mb-4">Menjadi solusi terpercaya dan unggul dalam memberikan layanan pengurusan surat-surat kendaraan bermotor secara cepat, aman dan professional serta menjadi mitra utama masyarakat dalam pengelolaan administrasi kendaraan</p>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url();?>assets/img/fisik.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url();?>assets/img/bpkb.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url();?>assets/img/pajak.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url();?>assets/img/samsat.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="<?= base_url();?>assets/img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white"></h1>
                    <span class="text-primary"></span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white">1234</h1>
                    <span class="text-primary">Pelanggan Kami</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white">1234</h1>
                    <span class="text-primary">Project Selesai</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white"></h1>
                    <span class="text-primary"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Misi Kami</h1>
                   
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                           
                            <span>Memberikan layanan pengurusan surat-surat kendaraan bermotor yang efisien dalam mengutamakan kemudahan, kecepatan dan keakuratan</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-10-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            
                            <span>Menyediakan layanan yang ramah, transparan dan terpercaya</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-06-light.png" alt="">
                        </div>
                        <div class="ms-4">
                           
                            <span>Menggunakan teknologi terkini untuk mendukung kemudahan dan kenyamanan pelanggan</span>
                        </div>
                    </div>
                       <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-06-light.png" alt="">
                        </div>
                        <div class="ms-4">
                           
                            <span>Membangun hubungan jangka panjang dengan pelanggan melalui pelayanan yang berkualitas tinggi</span>
                        </div>
                    </div>
                     <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-06-light.png" alt="">
                        </div>
                        <div class="ms-4">
                           
                            <span>Meningkatkan kesadaran masyarakat tentang pentingnya taat pajak dalam mendukung pembangunan terutama taat pajak kendaraan bermotor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?= base_url();?>assets/img/misi.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Pasar dan Klien</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/leasing.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Sektor Leasing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/tambang.jpeg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Sektor Pertambangan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/kebun.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Sektor Perkebunan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/pemerintah.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Sektor Pemerintahan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/otomotif.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Sektor Otomotif</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?= base_url();?>assets/img/pribadi.jpeg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="<?= base_url();?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">Perseorangan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
   



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Apa kata orang tentan kami</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="<?= base_url();?>assets/img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="<?= base_url();?>assets/img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="<?= base_url();?>assets/img/testimonial-3.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url();?>assets/img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-white mb-4"><img class="img-fluid me-3" src="<?= base_url();?>assets/img/icon/icon-02-light.png" alt="">LFA</h1>
                    <span>Menjadi solusi terpercaya dan unggul dalam memberikan layanan pengurusan surat-surat kendaraan bermotor secara cepat, aman dan professional serta menjadi mitra utama masyarakat dalam pengelolaan administrasi kendaraan</span>
                </div>
            
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Hubungi Kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Alamat 1. Jalan A. Yani KM 5,5 Komplek Saka Agung No.120 Banjarmasin Kalimantan Selatan <br /> Alamat 2. Jalan A. Yani KM 5,5 Komplek Banjar Indah Permai No Banjarmasin Kalimantan Selatan</p>
                    <p><i class="fa fa-phone-alt me-3"></i>0813-4890-1090 | 0811-5137-755</p>
                    <p><i class="fa fa-envelope me-3"></i>lubnafaeyzaalfarizqy23@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Layanan Kami</h5>
                    <a class="btn btn-link" href="">Daftar Baru</a>
                    <a class="btn btn-link" href="">Perpanjang STNK</a>
                    <a class="btn btn-link" href="">STNK Hilang</a>
                    <a class="btn btn-link" href="">Balik Nama</a>
                    <a class="btn btn-link" href="">Pengabsahan/Blokir BPKB</a>
                    <a class="btn btn-link" href="">Revisi BPKB/STNK</a>
                    <a class="btn btn-link" href="">Legalisir Faktur</a>
                </div>
              
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Ikuti Kami</h5>
                    <div class="d-flex">
                      
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-instagram"></i></a>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">CV. Lubna Faeyza Alfarizqy </a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/lib/wow/wow.min.js"></script>
    <script src="<?= base_url();?>assets/lib/easing/easing.min.js"></script>
    <script src="<?= base_url();?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url();?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url();?>assets/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url();?>assets/js/main.js"></script>
</body>

</html>