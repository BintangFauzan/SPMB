<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $judul; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= base_url("assets"); ?>/img/logo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url("assets"); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url("assets"); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url("assets"); ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url("assets"); ?>/css/style.css" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.css">
  <!-- Daterangepicker -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/daterangepicker/daterangepicker.css">

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    h1,
    h2 {
      font-family: Arial, Helvetica, sans-serif;
    }
    
  /* General Navbar Styles */
  .navbar-brand img {
    max-width: 100px; /* Limit logo width */
  }

  /* Responsive Adjustments */
  @media (max-width: 767px) {
    /* Navbar adjustments */
    .navbar-brand img {
      width: 50%; /* Adjust logo size for smaller screens */
    }

    .navbar {
      padding: 0 10px;
    }

    .navbar-nav {
      flex-direction: column; /* Stack nav links vertically */
      text-align: center;
    }

    .navbar-nav .nav-item {
      padding: 5px 0; /* Add spacing between nav items */
    }

    /* Spinner alignment adjustment */
    #spinner {
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
  }
  </style>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="<?= base_url("TK/tampil"); ?>" class="navbar-brand ms-4 ms-lg-0">
      <img src="<?= base_url("assets"); ?>/img/logo.png" width="60%" alt="">
      <!-- <h1 class="text-primary m-0">Baker</h1> -->
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto p-4 p-lg-0">
        <a href="<?= base_url("TK/tampil"); ?>" class="nav-item nav-link <?= ($this->uri->segment(1) === 'TK') ? 'active' : '' ?>">TK</a>
        <a href="<?= base_url("SD/tampil"); ?>" class="nav-item nav-link <?= ($this->uri->segment(1) === 'SD') ? 'active' : '' ?>">SD</a>
        <a href="<?= base_url("SMP/tampil"); ?>" class="nav-item nav-link <?= ($this->uri->segment(1) === 'SMP') ? 'active' : '' ?>">SMP</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
