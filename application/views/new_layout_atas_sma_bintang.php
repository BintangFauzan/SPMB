<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $judul;?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
   <link href="<?=base_url("assets");?>/img/icon_website.png" rel="icon">

  <link href="<?= base_url("assets/"); ?>new-asset/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("assets/"); ?>new-asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>new-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>new-asset/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>new-asset/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>new-asset/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.css">
  <!-- Main CSS File -->
  <link href="<?= base_url("assets/"); ?>new-asset/assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/daterangepicker/daterangepicker.css">

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
	<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url(); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img style="max-width: 100%;" class="img-fluid" src="<?= base_url("assets/"); ?>new-asset/assets/img/SMA/icon-sidebar-kiri-SMA.PNG" alt="">
        <!-- <h1 class="sitename">Yummy</h1> -->
        <!-- <span>.</span> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
		<li><a href="<?= base_url("TK/tampil"); ?>" class=" <?= ($this->uri->segment(1) === 'TK') ? 'active' : '' ?>">TK</a></li>
        <li><a href="<?= base_url("SD/tampil"); ?>" class="<?= ($this->uri->segment(1) === 'SD') ? 'active' : '' ?>">SD</a></li>
        <li><a href="<?= base_url("SMP/tampil"); ?>" class=" <?= ($this->uri->segment(1) === 'SMP') ? 'active' : '' ?>">SMP</a></li>
        <li><a href="<?= base_url("SMA/tampil"); ?>" class=" <?= ($this->uri->segment(1) === 'SMA') ? 'active' : '' ?>">SMA</a></li>
    
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
</header>
