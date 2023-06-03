<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM datapuskesmas WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="modal-body">
        <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Pasien</h3>
    </div>
    <!-- /.card header -->
    <div class="card-body">
        <form method='get' action='update/update_datapuskesmas.php'>
            <div class="row">
                <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="exampleInputid">Kode Puskesmas</label>
                <input type="text" class="form-control" id="exampleInputid" placeholder="id" name='id' value="<?php echo $view['id'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputpuskesmas">puskesmas</label>
                <input type="text" class="form-control" id="exampleInputpuskesmas" placeholder="Nama Puskesmas" name='namapuskesmas' value="<?php echo $view['namapuskesmas'];?>">
            </div>
                <button type="submit" class="btn-sm btn-info">Simpan</button>
                <a href="index.php?page=datapuskesmas" class="btn-sm btn-warning">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.card -->
    </div>
 </div>
<!-- /.row -->
    </div>
<!-- /.container-fluid -->
    </section>
<!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</div>
</section>