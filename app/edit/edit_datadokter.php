<?php
$nip    = $_GET['nip'];
$query = mysqli_query($koneksi,"SELECT * FROM datadokter WHERE nip='$nip'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="modal-body">
        <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Dokter</h3>
    </div>
    <!-- /.card header -->
    <div class="card-body">
        <form method='get' action='update/update_datadokter.php'>
            <div class="row">
                <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="exampleInputNik">nip</label>
                <input type="text" class="form-control" id="exampleInputnip" placeholder="nip" name='nip' value="<?php echo $view['nip'];?>" hidden>
            </div>
            <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap" name='nama' value="<?php echo $view['nama'];?>">
            </div>
              <div class="form-group">
                <label for="exampleInputttl">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleInputttl" placeholder="Tanggal Lahir" name='ttl' value="<?php echo $view['ttl'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputfakultas">fakultas</label>
                <input type="text" class="form-control" id="exampleInputfakultas" placeholder="fakultas" name='fakultas' required value="<?php echo $view['fakultas'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputstatus">Status</label>
                <input type="text" class="form-control" id="exampleInputstatus" placeholder="Status" name='status' required value="<?php echo $view['status'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputpeminatan">peminatan</label>
                <input type="text" class="form-control" id="exampleInputpeminatan" placeholder="peminatan" name='peminatan' required value="<?php echo $view['peminatan'];?>">
              </div>
                <button type="submit" class="btn-sm btn-info">Simpan</button>
                <a href="index.php?page=datadokter" class="btn-sm btn-warning">Kembali</a>
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