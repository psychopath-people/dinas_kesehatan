<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-15">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Dokter</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-xl">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Lahir</th>
                    <th>Fakultas</th>
                    <th>Status</th>
                    <th>Peminatan</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM datadokter");
                    while($dokter = mysqli_fetch_array($query)){
                      $no++;
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $dokter['nip']?></td>
                    <td><?php echo $dokter['nama']?></td>
                    <td><?php echo $dokter['ttl']?></td>
                    <td><?php echo $dokter['fakultas']?></td>
                    <td><?php echo $dokter['status']?></td>
                    <td><?php echo $dokter['peminatan']?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $dokter['nip'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-datadokter&&nip=<?php echo $dokter['nip'];?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_datadokter.php">
            <div class="modal-body">
            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
            <div class="form-group">
                <label for="exampleInputNIP">NIP</label>
                <input type="text" class="form-control" id="exampleInputNIP" placeholder="Masukan NIP" name="nip" required>
              </div>
              <div class="form-group">
                <label for="exampleInputNamaDokter">Nama Dokter</label>
                <input type="text" class="form-control" id="exampleInputNamaDokter" placeholder="Nama Dokter" name="nama" required>
              </div><div class="form-group">
                <label for="exampleInputTanggalLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleInputTanggalLahir" placeholder="Masukan Tanggal Lahir" name="ttl" required>
              </div>
              <div class="form-group">
                <label for="exampleInputFakultas">Fakultas</label>
                <input type="text" class="form-control" id="exampleInputFakultas" placeholder="Masukan Fakultas" name="fakultas" required>
              </div>
              <div class="form-group">
                <label for="exampleInputStatus">Status</label>
                <input type="text" class="form-control" id="exampleInputNamaStatus" placeholder="Masukan Status" name="status" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPeminatan">Peminatan</label>
                <input type="text" class="form-control" id="exampleInputPeminatan" placeholder="Masukan Peminatan" name="peminatan" required>
              </div>
              </div>
                  <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                </div>
              <div class="input-group-append">
              </div>
            </div>     
          </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-dark">Simpan</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <script>
      function hapus_data(data_nip){
        //alert('ok');
        //window.location=("delete/hapus_data.php?id="+data_id);
        Swal.fire({
          title: 'Apakah Anda Ingin Menghapusnya?',
          //showDenyButton: false,
          showCancelButton: true,
          confirmButtonText: 'Hapus',
          confirmButtonColor: 'red',
          //denyButtonText: 'No',
        }).then((result) =>{
          /*Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
           window.location=("delete/hapusdata_dokter.php?nip="+data_nip);
          } 
        })
      }
    </script>       
                                       