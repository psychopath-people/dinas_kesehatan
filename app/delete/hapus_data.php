<?php
include('../../conf/config.php');
$nik = $_GET['nik'];

$query = mysqli_query($koneksi,"DELETE FROM datapasien WHERE nik='$nik'");
header('Location: ../index.php?page=datapasien');
?>