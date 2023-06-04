<?php
include('../../conf/config.php');
// var_dump($_POST);
// exit;
$query = mysqli_query($koneksi, "INSERT INTO datapasien (nik, nama, jeniskelamin, goldarah, alamat, tanggallahir, umur, nomorhp, tglperiksa, puskesmas, riwayat) 
VALUES('$_POST[nik]', '$_POST[nama]', '$_POST[jeniskelamin]', '$_POST[goldarah]','$_POST[alamat]','$_POST[tanggallahir]','$_POST[umur]','$_POST[nomorhp]','$_POST[tglperiksa]','$_POST[puskesmas]','$_POST[riwayat]')");
header('Location: ../index.php?page=datapasien');
