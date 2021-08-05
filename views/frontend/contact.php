<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

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
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('profil') ?>">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pemesanan') ?>">Pemesanan</a>
              </li>
              <li class="nav-item active">
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
                <h4>contact us</h4>
                <h2>let’s stay in touch!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Send us a message</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Send Message</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>contact information</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>
                            +62878-3246-2006<br>
                            +62859-2601-1444
                          </h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>contact@company.com</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>Jl. Jagalan Tegorejo, Cegunan, Tegorejo, Kec. Pegandon, Kabupaten Kendal, Jawa Tengah 51357</h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.265105838367!2d110.1556009142012!3d-6.978014570268119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705dbaf85a0d9f%3A0xdbe99dbe7e05eaa9!2sJOKO%20TRANS%20TEGOREJO%20PEGANDON!5e0!3m2!1sid!2sid!4v1622955960454!5m2!1sid!2sid" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
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