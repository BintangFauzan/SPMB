<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?=$judul;?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?=base_url("assets");?>/img/logo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?=base_url("assets");?>/portal/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=base_url("assets");?>/portal/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="<?=base_url("assets");?>/portal/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?=base_url("assets");?>/portal/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?=base_url("assets");?>/portal/css/style.css" rel="stylesheet">

  <style>

 /* Navbar style */
.navbar {
  background-color: transparent !important;
  box-shadow: none;
}

.navbar-light .navbar-nav .nav-link {
  color: #fff !important;
}

/* Service section with image */
#service {
  position: relative;
  background-image: url("<?=base_url('assets');?>/img/santri2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* Dark overlay effect */
#service::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.65);
  z-index: 1;
}

#service > * {
  position: relative;
  z-index: 2;
}

/* Text style */
#service h1 {
  color: #fff;
}
    .display-3,
    .display-4 {
      font-family:  'Open Sans', Arial, Helvetica, sans-serif !important;
    }
    .display-3 {
      font-weight: 900;
      font-style:bold;
    }
    .display-4 {
      font-size: 2rem;

    }
    /* Fixed navbar on scroll */
.nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10; /* Ensure it stays above the background */
  background: rgba(255, 255, 255, 0); /* Light transparent background */
}


  </style>
</head>

<body>

  <!-- Spinner Start -->
  <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

<!-- Navbar start -->
<div class="container-fluid nav-bar">
<div class="d-flex justify-content-between align-items-center mb-4">
            <img src="<?=base_url('assets');?>/img/logo_KU.png" alt="Left Logo" style="width: 15%;">
            <img src="<?=base_url('assets');?>/img/logo_PPDB.png" alt="Right Logo" style="width: 10%;">
        </div>
</div>
<!-- Navbar End -->

<!-- Service Start -->
<div class="container-fluid service py-5 vh-100" id="service">
  <div class="container">
    <div class="text-center wow bounceInUp mb-3" data-wow-delay="0.1s">
      <h1 class="display-3"><b>Pendaftaran Peserta Didik Baru</b></h1>
      <h3 class="display-4 text-light">Sekolah Tahfizh Plus Khoiru Ummah Pekanbaru <br> Tahun Ajaran 2025/2026</h3>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-12 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
        <div class="bg-light rounded service-item">
          <div class="service-content d-flex align-items-center justify-content-center p-4">
            <div class="service-content-icon text-center">
              <i class="fas fa-home fa-7x text-primary mb-4"></i>
              <h4 class="mb-3">TK</h4>
              <p class="mb-4">Taman Kanak-Kanak</p>
              <a href="<?=base_url('TK/tampil');?>" class="btn btn-primary px-4 py-2 rounded-pill">Daftar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
        <div class="bg-light rounded service-item">
          <div class="service-content d-flex align-items-center justify-content-center p-4">
            <div class="service-content-icon text-center">
              <i class="fas fa-home fa-7x text-primary mb-4"></i>
              <h4 class="mb-3">SD</h4>
              <p class="mb-4">Sekolah Dasar</p>
              <a href="<?=base_url('SD/tampil');?>" class="btn btn-primary px-4 py-2 rounded-pill">Daftar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
        <div class="bg-light rounded service-item">
          <div class="service-content d-flex align-items-center justify-content-center p-4">
            <div class="service-content-icon text-center">
              <i class="fas fa-home fa-7x text-primary mb-4"></i>
              <h4 class="mb-3">SMP</h4>
              <p class="mb-4">Sekolah Menengah Pertama</p>
              <a href="<?=base_url('SMP/tampil');?>" class="btn btn-primary px-4 py-2 rounded-pill">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->



  <!-- Copyright Start -->
  <!-- <div class="container-fluid copyright bg-dark py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <span class="text-light">&copy; <script>
              document.write(new Date().getFullYear());
            </script> Sekolah Tahfizh Plus Khairu Ummah Pekanbaru, All Right Reserved.</span>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Copyright End -->

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/wow/wow.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/easing/easing.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/waypoints/waypoints.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/counterup/counterup.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?=base_url("assets");?>/portal/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?=base_url("assets");?>/portal/js/main.js"></script>
</body>

</html>