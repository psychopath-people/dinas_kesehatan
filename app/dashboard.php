<?php
        include('../conf/config.php');
        ?>
<div class="container-fluid">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="container">
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>
        <!-- /.row -->
        <!-- Main row -->
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <?php
    $query = "SELECT DATE_FORMAT(tglperiksa, '%Y-%m') AS tanggal, COUNT(*) AS jumlah FROM datapasien GROUP BY DATE_FORMAT(tglperiksa, '%Y-%m')";
    $query1 = "SELECT puskesmas, COUNT(*) AS jumlah FROM pasien GROUP BY puskesmas";
    $result = $koneksi->query($query);
    $result1 = $koneksi->query($query1);


    

    // Inisialisasi array untuk menyimpan data bulan dan jumlah datadatapasien
    $labels = [];
    $data = [];

    $labels1 = [];
    $data1 = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $labels[] = $row['tanggal'];
            $data[] = $row['jumlah'];
        }
    }
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $labels1[] = $row['puskesmas'];
            $data1[] = $row['jumlah'];
        }
    }

    // Tutup koneksi database
    $koneksi->close();
    ?>

    <script>
        // Data dari PHP disimpan dalam variabel JavaScript
        var labels = <?php echo json_encode($labels); ?>;
        var data = <?php echo json_encode($data); ?>;

        // Membuat grafik menggunakan Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah datapasien',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
         // Data dari PHP disimpan dalam variabel JavaScript
        var labels1 = <?php echo json_encode($labels1); ?>;
        var data1 = <?php echo json_encode($data1); ?>;

        // Membuat grafik menggunakan Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah datapasien',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>