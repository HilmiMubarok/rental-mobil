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
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('profil') ?>">Profil</a>
              </li>
              <li class="nav-item active">
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
    <div class="pt-5"></div>

    <div class="blog-posts">
      <div class="container">
        <div class="blog-post">
          <div class="down-content down-content-border">
            <h4>Detail Pesanan</h4>
            <p>
              Mobil :  <?= $data_mobil->nama ?><br>
              No. Polisi : <?= $data_mobil->no_polisi ?> <br>
              Jumlah Kursi : <?= $data_mobil->jumlah_kursi ?> <br>
              Tahun Beli : <?= $data_mobil->tahun_beli ?>
            </p>
            <table class="mt-3 table table-bordered table-striped table-hover">
              <tr>
                <th>Nama</th>
                <td><?= $data_mobil->nama_pemesan ?></td>
              </tr>
              <tr>
                <th>No HP</th>
                <td><?= $data_mobil->hp_pemesan ?></td>
              </tr>
              <tr>
                <th>Kota Asal</th>
                <td><?= $data_mobil->asal ?></td>
              </tr>
              <tr>
                <th>Kota Tujuan</th>
                <td><?= $data_mobil->tujuan ?></td>
              </tr>
              <tr>
                <th>Jarak</th>
                <td><?= $data_mobil->jarak ?> KM</td>
              </tr>
              <tr>
                <th>Jenis Pembayaran</th>
                <td><?= $data_mobil->jenis_bayar ?></td>
              </tr>
              <tr>
                <th>Dengan Sopir</th>
                <td><?= $data_mobil->dengan_sopir ?></td>
              </tr>
              <tr>
                <th>Tanggal Pinjam</th>
                <td><?= $data_mobil->tgl_pinjam ?></td>
              </tr>
              <tr>
                <th>Tanggal Kembali</th>
                <td><?= $data_mobil->tgl_kembali ?></td>
              </tr>
              <tr>
                <th>Total Harga</th>
                <td><?= "Rp. ". number_format($data_mobil->harga) ?></td>
              </tr>
            </table>
            <?php if(checkSession('success')): ?>
              <div class="alert alert-success bg-success" role="alert">
                <h4 class="alert-heading text-white">Pesanan Anda Berhasil Dibuat!</h4>
                <p class="text-white">
                  Silahkan tunggu admin dalam memproses pesanan anda. jika dalam 1x24 jam admin tidak menghubungi, silahkan kontak lewat nomor dibawah.
                </p>
                <p class="mb-0 text-white">WA admin : 62859-2601-1444</p>
              </div>
            <?php elseif(checkSession('error')): ?>
              <div class="alert alert-danger bg-danger" role="alert">
                <h4 class="alert-heading text-white">Pesanan Anda Gagal Dibuat!</h4>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2020 Joko Trans Rental
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

    <script>
      let tglp   = document.getElementById('tglp')
      let tglk   = document.getElementById('tglk')
      let cb     = document.querySelector('#sopir')
      let hargaa = document.getElementById('harga')
      let hrg    = document.getElementById('hrg')
      let p      = 0
      let k      = 0

      $(document.body).on('change', "#sopir", function (e) {
          if (cb.checked) {
              hrg.innerHTML = "Rp. "+ tambahSopir(getHarga(p, k), true).toLocaleString()
          } else {
              hrg.innerHTML = "Rp. "+ tambahSopir(getHarga(p, k), false).toLocaleString()
          }
      })

      $(document.body).on('change',"#tglp",function (e) {

        t = new Date(tglp.value)

        p = t.getTime()

        getHarga(p, k)

      });

      $(document.body).on('change',"#tglk",function (e) {

        t = new Date(tglk.value)

        k = t.getTime()

        getHarga(p, k)

      });


      function getHarga(tglp, tglk) {
        /*

            Rumus Harga
            12 jam = 150
            24 jam = 300

            Tambah Sopir 100000

        */
        var diff = (tglk - tglp) / 1000;
        diff /= (60 * 60);
        let total_harga
        let total_waktu = Math.abs(Math.round(diff))

        if (total_waktu % 12 > 0) {
          harga = (Math.round(total_waktu / 12) * 150000) + 150000
          total_harga = "Rp. " + harga.toLocaleString()
          if (harga > 10000000) {
              total_harga = "Loading..."
          }
        } else {
          harga = Math.round(total_waktu / 12) * 150000
          total_harga = "Rp. " + harga.toLocaleString()
          if (harga > 10000000) {
              total_harga = "Loading..."
          }
        }

        hrg.innerHTML = total_harga
        hargaa.value = harga
        return harga
      }

      function tambahSopir(harga, isact) {
          if (isact == true) {
              return harga + 100000
          } else {
              return harga
          }
      }
    </script>

  </body>
</html>
