<?php

if(!defined('BASEPATH')) echo "Tidak bisa langsung mengakses halaman ini!";

define('DEFAULT_CONTROLLER', 'C_Home');
define('BASE_URL', 'http://localhost:8000/rental-mobil/');
define('APP_NAME', 'Aplikasi Rental Mobil');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_rm');

 if (!$connection = new Mysqli("localhost", "root", "", "db_rm")) {
  echo "<h3>ERROR: Koneksi database gagal!</h3>";
}
$sql = "SELECT
          a.id,
          (
            TIMESTAMPDIFF(
              DAY,
              SUBSTRING_INDEX(a.tgl_kembali,' ', 1),
              DATE(NOW())
            )
          ) AS terlambat,
          150000 * (
          TIMESTAMPDIFF(
	          DAY, 
	          SUBSTRING_INDEX(a.tgl_kembali,' ', 1),
	          DATE(NOW())
	        ) 
	      ) AS denda
        FROM tbl_pesan a
        WHERE SUBSTRING_INDEX(a.tgl_kembali, ' ', 1) <> ''";
$query = $connection->query($sql);
while ($a = $query->fetch_assoc()) { 
  if ($a["denda"] > 0) { 
      if (!$connection->query("UPDATE tbl_pesan SET denda=$a[denda] WHERE id=$a[id]")) {
        die("Hitung denda otomatis gagal.");
      }
  }
}

?>
