<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_kelahiran = htmlspecialchars($_POST['nik_kelahiran']);
$nama_kelahiran = htmlspecialchars($_POST['nama_kelahiran']);
$tempat_lahir_kelahiran = htmlspecialchars($_POST['tempat_lahir_kelahiran']);
$tanggal_lahir_kelahiran = htmlspecialchars($_POST['tanggal_lahir_kelahiran']);
$jenis_kelamin_kelahiran = htmlspecialchars($_POST['jenis_kelamin_kelahiran']);

$alamat_ktp_kelahiran = htmlspecialchars($_POST['alamat_ktp_kelahiran']);
$alamat_kelahiran = htmlspecialchars($_POST['alamat_kelahiran']);
$desa_kelurahan_kelahiran = htmlspecialchars($_POST['desa_kelurahan_kelahiran']);
$kecamatan_kelahiran = htmlspecialchars($_POST['kecamatan_kelahiran']);
$kabupaten_kota_kelahiran = htmlspecialchars($_POST['kabupaten_kota_kelahiran']);
$provinsi_kelahiran = htmlspecialchars($_POST['provinsi_kelahiran']);
$negara_kelahiran = htmlspecialchars($_POST['negara_kelahiran']);
$rt_kelahiran = htmlspecialchars($_POST['rt_kelahiran']);
$rw_kelahiran = htmlspecialchars($_POST['rw_kelahiran']);

$agama_kelahiran = htmlspecialchars($_POST['agama_kelahiran']);
$pendidikan_terakhir_kelahiran = htmlspecialchars($_POST['pendidikan_terakhir_kelahiran']);
$pekerjaan_kelahiran = htmlspecialchars($_POST['pekerjaan_kelahiran']);
$status_perkawinan_kelahiran = htmlspecialchars($_POST['status_perkawinan_kelahiran']);
$status_kelahiran = htmlspecialchars($_POST['status_kelahiran']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database
$query = "INSERT INTO warga (id_warga, nik_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, alamat_ktp_warga, alamat_warga, desa_kelurahan_warga, kecamatan_warga, kabupaten_kota_warga, provinsi_warga, negara_warga, rt_warga, rw_warga, agama_warga, pendidikan_terakhir_warga, pekerjaan_warga, status_perkawinan_warga, status_warga, id_user, created_at, updated_at) VALUES (NULL, '$nik_kelahiran', '$nama_kelahiran', '$tempat_lahir_kelahiran', '$tanggal_lahir_kelahiran', '$jenis_kelamin_kelahiran', '$alamat_ktp_kelahiran', '$alamat_kelahiran', '$desa_kelurahan_kelahiran', '$kecamatan_kelahiran', '$kabupaten_kota_kelahiran', '$provinsi_kelahiran', '$negara_kelahiran', '$rt_kelahiran', '$rw_kelahiran', '$agama_kelahiran', '$pendidikan_terakhir_kelahiran', '$pekerjaan_kelahiran', '$status_perkawinan_kelahiran', '$status_kelahiran', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";


$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah kelahiran berhasil'); window.location.href='../kelahiran/'</script>";
} else {
  echo "<script>window.alert('Tambah kelahiran gagal!'); window.location.href='../kelahiran/create.php'</script>";
}
