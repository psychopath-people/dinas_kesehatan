<?php
include('../../conf/config.php');
$id     = $_GET['id'];
$nama     = $_GET['namapuskesmas'];

$query = mysqli_query($koneksi,"UPDATE datapuskesmas SET id='$id',namapuskesmas='$nama' WHERE id='$id'");
header('Location: ../index.php?page=datapuskesmas');
?>