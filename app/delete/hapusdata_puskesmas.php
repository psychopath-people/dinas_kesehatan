<?php
include('../../conf/config.php');
$id = $_GET['id'];
var_dump($id);
exit;
$query = mysqli_query($koneksi, "DELETE FROM datapuskesmas WHERE id='$id'");
header('Location: ../index.php?page=datapuskesmas');
