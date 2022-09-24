<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--bootstrap css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="<?=base_url()?>/assets/img/IMG_3247 (1).png" rel="icon" />
    <link href="<?=base_url()?>/assets/img/IMG_3247 (1).png" rel="apple-touch-icon" />

    <!--my css-->
    <title><?=$title?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link href="<?=base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="<?=base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!--my fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/stylesheet.css" />
  </head>
  <body id="home">
    <!-- nav-->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo me-auto">Gemilangpermata</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="<?=base_url()?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="<?=base_url()?>">Beranda</a></li>
            <li><a class="nav-link scrollto" href="<?=base_url('event'); ?>">Berita</a></li>
            <li><a class="nav-link scrollto" href="<?=base_url('blog'); ?>">Artikel</a></li>
            <li><a class="nav-link scrollto" href="#services">Divisi</a></li>
            <li><a class="nav-link scrollto" href="<?=base_url('portfolio'); ?>">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="#team">Anggota</a></li>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
    
    <?=$this-> renderSection('content'); ?>

    <!--footer-->
    <footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Ayo bergabung dengan kami!</h4>
              <p>Gabung untuk menjadi bagian dari Gemilang Permata</p>
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Subscribe" /></form>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Gemilang Permata</h3>
              <p>
                Jl. Hos Cokroaminoto, Karang Tengah <br />
                Kota Tangerang, Banten Indonesia 15157<br />
                Indonesia <br /><br />
                <strong>Phone:</strong> +62 899 9657 180<br />
                <strong>Email:</strong> nfo@gemilangpermata.com<br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Follow us on our social media</p>
              <div class="social-links mt-3">
                <a ahref="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Gemilangpermata</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by <a href="https://www.linkedin.com/company/cv-gemilang-permata/">CV.Gemilang Permata</a>
        </div>
      </div>
    </footer>
    <!--end footer-->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url()?>/assets/vendor/aos/aos.js"></script>
    <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?=base_url()?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url()?>/assets/js/main.js"></script>
    </body>
</html>
  