<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>ExploreID</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url('assets_guest/vendor/bootstrap/css/bootstrap.min.css') ?>" >

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets_guest/css/fontawesome.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets_guest/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets_guest/css/animated.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets_guest/css/owl.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets_guest/css/lightbox.css') ?>">
</head>

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= site_url() ?>" class="">
              <img src="<?= base_url('img/logotext.png') ?>" alt=""
              style="width: auto; height: 2.5em; margin-top: 1em;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="<?= base_url() ?>" class="<?= ($activePage == 'index') ? 'active':''; ?>">Home</a></li>
              <li><a href="<?= base_url() ?>/faq" class="<?= ($activePage == 'faq') ? 'active':''; ?>">FAQ</a></li>
              <!-- <li><a href="<?= base_url() ?>/content" class="<?= ($activePage == 'something') ? 'active':''; ?>">Contact Us</a></li> -->
              <li>
                <div class="main-white-button"><a href="<?= base_url() ?>/share"><i class="fa fa-plus"></i> Share Your Experience</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->