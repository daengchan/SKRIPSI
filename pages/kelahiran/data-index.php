<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17 AND tanggal_lahir_warga != '0000-00-00'";

$hasil = mysqli_query($db, $query);

$data_kelahiran = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kelahiran[] = $row;
}
