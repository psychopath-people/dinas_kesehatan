<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=experied');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content-header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){ 
        include('dashboard.php');
      }
      else if ($_GET['page']=='datapasien'){ 
        include('datapasien.php');
      }
      else if ($_GET['page']=='datadokter'){ 
        include('datadokter.php');
      }
      else if ($_GET['page']=='datapuskesmas'){ 
        include('puskesmas.php');
      }
      else if ($_GET['page']=='laporan'){ 
        include('laporanperbulan.php');
      }
      else if ($_GET['page']=='edit-data'){ 
        include('edit/edit_data.php');
      }
      else if ($_GET['page']=='edit-datadokter'){ 
        include('edit/edit_datadokter.php');
      }
      else if ($_GET['page']=='edit-puskesmas'){ 
        include('edit/edit_datapuskesmas.php');
      }
      else{
        include('not_found.php');
      }
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
