<?php
        include('../conf/config.php');
        $q =   $query = mysqli_query($koneksi,"SELECT * FROM datapuskesmas");
        $p =   $query = mysqli_query($koneksi,"SELECT * FROM datadokter");
        $s =   $query = mysqli_query($koneksi,"SELECT * FROM datapasien");
        while ($r = $q->fetch_array()) {
            $total = mysqli_num_rows($q);
            $total2 = mysqli_num_rows($p);
            $total1 = mysqli_num_rows($s);
        } ?>

<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total1; ?></h3>

                        <p>Pasien</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="index.php?page=datapasien" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total2; ?></h3>

                        <p>Dokter</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="index.php?page=datadokter" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $total; ?></h3>

                        <p>Puskesmas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="index.php?page=datapuskesmas" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->