<?php
include('../../conf/config.php');
$nik       = $_GET['nik'];
$nama      = $_GET['nama'];
$jk        = $_GET['jeniskelamin'];
$goldarah  = $_GET['goldarah'];
$alamat    = $_GET['alamat'];
$tgllhr    = $_GET['tanggallahir'];
$umur      = $_GET['umur'];
$nohp      = $_GET['nomorhp'];
$tglprksa  = $_GET['tglperiksa'];
$puskesmas = $_GET['puskesmas'];
$riwayat   = $_GET['riwayat'];

$query = mysqli_query($koneksi,"INSERT INTO datapasien (nik, nama, jeniskelamin, goldarah, alamat, tanggallahir, umur, nomorhp, tglperiksa, puskesmas, riwayat) 
VALUES('$nik', '$nama', '$jk', '$goldarah','$alamat', '$tgllhr', '$umur', '$nohp', '$tglprksa', '$puskesmas', '$riwayat')");


header('Location: ../index.php?page=datapasien');
?>