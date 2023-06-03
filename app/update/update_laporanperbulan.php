<?php
include('../../conf/config.php');
$bulan     = $_GET['bulan'];
$kode      = $_GET['kodepenyakit'];
$jumlah    = $_GET['jumlah'];
$query = mysqli_query($koneksi,"UPDATE laporan SET bulan='$bulan',kodepenyakit='$kode',jumlah='$jumlah' WHERE bulan='$bulan'");
header('Location: ../index.php?page=laporan');
?>