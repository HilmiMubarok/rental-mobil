<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Joko Trans Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('front') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('front') ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('front') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('front') ?>/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Joko Trans Rental<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('profil') ?>">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pemesanan') ?>">Pemesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="about-us">
      <div class="container">
      	
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col">
                <img src="<?= base_url('front') ?>/assets/images/banner-image-1-1920x300.jpg" class="img-thumbnail img-fluid">
              </div>
              <div class="col">
                <img src="<?= base_url('front') ?>/assets/images/mobil1.jpg" class="img-thumbnail img-fluid">
              </div>
              <div class="col">
                <img src="<?= base_url('front') ?>/assets/images/mobil2.jpg" class="img-thumbnail img-fluid">
              </div>
            </div>
            <p>Salah satu usaha rental mobil di Kecamatan Pegandon tepatnya di Desa Tegorejo yaitu, Rental Mobil Joko Trans. Usaha ini berdiri sejak tahun 2011 tepatnya dibulan Mei. Sampai saat ini Joko Trans memiliki 6 mobil diantaranya 2 unit Elf untuk pariwisata, 2 unit Avanza, 1 Mobilio, dan 1 Brio. Dalam menjalankan bisnis ini Joko Trans bekerja sama dengan teman yang profesinya sama-sama usaha rental mobil untuk mengantisipasi jika sewaktu-waktu kekurangan mobil. Usaha ini dilakukan demi kepuasan pelangan. Persaingan usaha yang semakin ketat dan perkembangan dunia bisnis yang semakin pesat mendorong suatu perusahaan untuk selalu meningkatkan kualitas dan pelayanan kepada konsumennya agar perusahaan tersebut bisa bertahan. Saat ini Joko Trans ingin meningkatkan kualitas pemesanan mobil kepada konsumen yang ada di Pegandon dan sekitarnya .Karena kepuasan konsumen menjadi tolak ukur keberhasilan.</p>
            <p>

          </div>
        </div>
        
        
      </div>
    </section>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2021 Joko Trans Rental
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('front') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('front') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= base_url('front') ?>/assets/js/custom.js"></script>
    <script src="<?= base_url('front') ?>/assets/js/owl.js"></script>
    <script src="<?= base_url('front') ?>/assets/js/slick.js"></script>
    <script src="<?= base_url('front') ?>/assets/js/isotope.js"></script>
    <script src="<?= base_url('front') ?>/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>