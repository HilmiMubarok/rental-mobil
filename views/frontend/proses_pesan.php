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
            <h4>Konfirmasi Pesanan</h4>
            <p>
              Mobil : <?= $data_mobil->nama ?> <br>
              No. Polisi : <?= $data_mobil->no_polisi ?> <br>
              Jumlah Kursi : <?= $data_mobil->jumlah_kursi ?> <br>
              Tahun Beli : <?= $data_mobil->tahun_beli ?>
            </p>
            <p>
              <form action="<?= base_url() ?>pemesanan/proses_pesan" method="post" enctype="multipart/form-data">
                <input type="hidden" name="harga" id="harga">
                <input type="hidden" name="id_mobil" value="<?= $data_mobil->id ?>">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama_pemesan" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                  <label for="">Nomor HP</label>
                  <input type="text" name="hp_pemesan" class="form-control" placeholder="Masukkan Nomor HP atau WhatsApp Anda">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Kota Asal</label>
                      <input type="text" name="asal" class="form-control" placeholder="Masukkan Kota Asal">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Kota Tujuan</label>
                      <input type="text" name="tujuan" class="form-control" placeholder="Masukkan Kota Tujuan">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Jarak dalam KM</label>
                      <input type="text" name="jarak" class="form-control" placeholder="Masukkan Jarak">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Jenis Pembayaran</label>
                  <select name="jenis_bayar" class="form-control">
                    <option>--- Pilih Jenis Pembayaran ---</option>
                    <option value="cash">Cash</option>
                    <option value="kredit">Kredit</option>
                    <option value="tf">Transfer Bank</option>
                  </select>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Tanggal Pinjam</label>
                      <input type="datetime-local" name="tgl_pinjam" class="form-control" id="tglp">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Tanggal Kembali</label>
                      <input type="datetime-local" name="tgl_kembali" class="form-control" id="tglk">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="dengan_sopir" id="sopir">
                    <label for="sopir">Dengan Sopir (+ Rp.100,000)</label>
                </div>
                <div class="form-group">
                  <label for="">Upload foto KTP</label>
                  <input type="file" name="foto_pemesan" class="form-control">
                </div>
                <div class="form-group mt-3">
                  <label for="">Total Harga : <span id="hrg"></span></label>
                </div>
            </p>
                <button type="submit" class="btn btn-primary">Buat Pesanan</button>
              </form>
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
