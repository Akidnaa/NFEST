<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">NFEST</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('main') }}"  class="active">Home<br></a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('events')}}">Events</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

       @auth
          <div class="dropdown ms-auto">
              <button class="d-flex align-items-center profile-dropdown-button" type="button" id="profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('assets/img/Foto Profil.png') }}" alt="Profile" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                  <span class="text-sm font-semibold text-white">{{ Auth::user()->name }}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-button">
                      <form method="POST" action="{{ route('logout') }}" >
                          @csrf
                          <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                  </li>
              </ul>
          </div>
      @endauth

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section dark-background position-relative">

  <!-- Background image -->
  <img src="assets/img/NFEST(5).jpg" alt="" class="hero-bg" data-aos="fade-in" style="object-fit: cover; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">

  <!-- Overlay -->
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 2;"></div>

  <div class="container position-relative" style="z-index: 3;">
    <div class="row gy-4 d-flex justify-content-between">
      
      <!-- Kiri: Teks dan ikon -->
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">Your Go to Events News Website</h2>
        <p data-aos="fade-up" data-aos-delay="100">
          NFEST bertujuan untuk memberikan akses yang "Convenient" untuk para mahasiswa mencari informasi seputar event yang sedang di gelar di lingkungan kampus
        </p>

        <!-- Ikon-ikon -->
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <i class="bi bi-people-fill display-4 text-white"></i>
              <p>ORMAWA</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <i class="bi bi-mortarboard-fill display-4 text-white"></i>
              <p>UKM</p>
            </div>
          </div>

         

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <i class="bi bi-globe display-4 text-white"></i>
              <p>EKSTERNAL</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Kanan: Logo -->
      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
        <img src="assets/img/NFest-logo.png" class="img-fluid mb-3 mb-lg-0" alt="">
      </div>

    </div>
  </div>

</section><!-- /Hero Section -->


 
   

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>PAST EVENTS<br></span>
        <h2>Most Recent Held Events On Campus</h2>
      </div><!-- End Section Title -->

      <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/NFEST(4).jpg" alt="" class="img-fluid">
              </div>
              <h3>Mobile Developmennt</h3>
              <p>GDGOC STT-NF</p>
            </div>
          </div><!-- End Card Item -->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/NFEST(2).jpg.jpg" alt="" class="img-fluid">
              </div>
              <h3>Build With AI</h3>
              <p>GDGOC STT-NF</p>
            </div>
          </div><!-- End Card Item -->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/NFEST(6).jpg" alt="" class="img-fluid">
              </div>
              <h3>Women In Tech</h3>
              <p>GDGOC STT-NF</p>
            </div>
          </div><!-- End Card Item -->

      </div>

    </section><!-- /Services Section -->


    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>JANGAN LEWATKAN !!!</span>
        <h2>JANGAN LEWATKAN !!!</h2>
        <p>EVENT EVENT SERU YANG ADA DI KAMPUS </p>
      </div><!-- End Section Title -->

      <div class="container">

  <div class="container">

  <div class="row gy-4 align-items-center features-item">
    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
      <img src="assets/img/NFEST(4).jpg" class="img-fluid" alt="">
    </div>
    <div class="col-md-7 " data-aos="fade-up" data-aos-delay="100">
      <h3>CEK EVENT TERBARU DI SINI</h3>

      <a href="{{ route('events') }}" 
         class="btn mb-3"
         style="background-color: #FFB245; color: white; padding: 12px 40px; border-radius: 50px; font-weight: 600; display: inline-block; text-decoration: none;">
        EVENT
      </a>

      <ul>
        <li><i class="bi bi-check"></i><span> Event dari Organisasi Mahasiswa</span></li>
        <li><i class="bi bi-check"></i> <span>Event dari Unit Kegiatan Mahasiswa</span></li>
        <li><i class="bi bi-check"></i> <span>Event Dari Organisasi Eksternal</span></li>
      </ul>
    </div>
  </div><!-- Features Item -->

</div>



        

      </div>

    </section><!-- /Features Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

  <img src="assets/img/NFEST(7).jpg" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Ririn.jpg" class="testimonial-img" alt="">
            <h3>Riani Apriyanti</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya memimpin tim pengembang NFEST dengan fokus pada visi besar dan kolaborasi, memastikan setiap bagian dari platform dikembangkan secara strategis dan berdampak.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Fahri.jpg" class="testimonial-img" alt="">
            <h3>Ahmad Fachri</h3>
            <h4>Backend Developer</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya mengembangkan sistem backend NFEST yang menangani penyimpanan data event, autentikasi pengguna, dan integrasi fitur agar platform berjalan dengan efisien dan aman.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Dika.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Andhika Thata</h3>
            <h4>Designer</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya mendesain tampilan antarmuka NFEST agar informatif, modern, dan mudah digunakan, sehingga pengguna dapat menikmati pengalaman terbaik saat menjelajahi event-event kampus.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Oliq.jpg" class="testimonial-img" alt="">
            <h3>Arrijal Abdul Kholiq</h3>
            <h4>Frontend Developer</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya membangun bagian frontend NFEST yang responsif dan interaktif, menghubungkan desain dengan fungsi agar pengguna bisa mengakses informasi event secara optimal di berbagai perangkat.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/yoshi.jpg" class="testimonial-img" alt="">
            <h3>Yoshi Indra Kusuma</h3>
            <h4>Scrum Master</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya berperan sebagai pengatur ritme kerja tim NFEST, memastikan proses pengembangan berjalan terstruktur, produktif, dan sesuai dengan target yang telah ditentukan.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Dzakiah.jpg" class="testimonial-img" alt="">
            <h3>Dzakiah Nur Aini</h3>
            <h4>Media</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya bertanggung jawab membuat konten visual dan media promosi untuk NFEST, memastikan setiap event terlihat menarik dan mudah dipahami oleh audiens kampus.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/Zen.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Zen Alby</h3>
            <h4>Media</h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Saya membantu membuat materi media dan dokumentasi event NFEST, agar setiap publikasi memiliki daya tarik visual dan meningkatkan partisipasi pengguna.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>



  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">NFEST</span>
          </a>
          <p>NFEST bertujuan untuk memberikan akses yang "Convenient" untuk para mahasiswa mencari informasi seputar event yang sedang di gelar di lingkungan kampus</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Events</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p><strong>Email:</strong> <span>nfest@gemail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NFEST</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hash = window.location.hash;
      if (hash && document.querySelector(hash)) {
        document.querySelector(hash).scrollIntoView({ behavior: 'smooth' });
      }
    });
  </script>

<script>
    // JavaScript for toggling the profile dropdown
        document.getElementById('profile-button').addEventListener('click', function () {
        const profileMenu = document.getElementById('profile-menu');
        profileMenu.classList.toggle('hidden');
    });
</script>
<style>
        html {
          scroll-behavior: smooth;
        }
      </style>
</body>
 
</html>