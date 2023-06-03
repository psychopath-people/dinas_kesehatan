<?php
include('../../conf/config.php');
$nip       = $_GET['nip'];
$nama      = $_GET['nama'];
$ttl       = $_GET['ttl'];
$fakultas  = $_GET['fakultas'];
$status    = $_GET['status'];
$peminatan = $_GET['peminatan'];

$query = mysqli_query($koneksi,"UPDATE datadokter SET nip='$nip',nama='$nama',ttl='$ttl',fakultas='$fakultas',status='$status',peminatan='$peminatan' WHERE nip='$nip'");
header('Location: ../index.php?page=datadokter');
?>