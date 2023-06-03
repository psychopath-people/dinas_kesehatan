<?php
include('../../conf/config.php');
$id           = $_GET['id'];
$nama         = $_GET['namapuskesmas'];
$query = mysqli_query($koneksi,"INSERT INTO datapuskesmas (id, namapuskesmas) VALUES('$id', '$nama')");
header('Location: ../index.php?page=datapuskesmas');
?>