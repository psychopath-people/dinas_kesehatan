<?php
include('../../conf/config.php');
$nip = $_GET['nip'];

$query = mysqli_query($koneksi,"DELETE FROM datadokter WHERE nip='$nip'");
header('Location: ../index.php?page=datadokter');
?>