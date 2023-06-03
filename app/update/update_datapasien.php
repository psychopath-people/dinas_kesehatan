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
$query = mysqli_query($koneksi,"UPDATE datapasien SET nik='$nik',nama='$nama',jeniskelamin='$jk',goldarah='$goldarah',alamat='$alamat',tanggallahir='$tgllhr',umur='$umur',nomorhp='$nohp',tglperiksa='$tglprksa',puskesmas='$puskesmas',riwayat='$riwayat' WHERE nik='$nik'");
header('Location: ../index.php?page=datapasien');
?>