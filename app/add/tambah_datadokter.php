<?php
include('../../conf/config.php');

$nip       = $_GET['nip'];
$nama      = $_GET['nama'];
$ttl       = $_GET['ttl'];
$fakultas  = $_GET['fakultas'];
$status    = $_GET['status'];
$peminatan = $_GET['peminatan'];

$query = mysqli_query($koneksi,"INSERT INTO datadokter (nip, nama, ttl, fakultas, status, peminatan) 
VALUES('$nip', '$nama', '$ttl', '$fakultas','$status', '$peminatan')");

header('Location: ../index.php?page=datadokter');
?>