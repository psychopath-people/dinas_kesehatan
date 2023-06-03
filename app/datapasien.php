  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-15">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
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
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Gol-Darah</th>
                    <th>Alamat</th>
                    <th>Tgl-Lhr</th>
                    <th>Umur</th>
                    <th>No Tlp</th>
                    <th>Tgl-Prksa</th>
                    <th>Nama-Psksms</th>
                    <th>Riwayat</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM datapasien");
                    while($pasien = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $pasien['nik']?></td>
                    <td><?php echo $pasien['nama']?></td>
                    <td><?php echo $pasien['jeniskelamin']?></td>
                    <td><?php echo $pasien['goldarah']?></td>
                    <td><?php echo $pasien['alamat']?></td>
                    <td><?php echo $pasien['tanggallahir']?></td>
                    <td><?php echo $pasien['umur']?></td>
                    <td><?php echo $pasien['nomorhp']?></td>
                    <td><?php echo $pasien['tglperiksa']?></td>
                    <td><?php echo $pasien['puskesmas']?></td>
                    <td><?php echo $pasien['riwayat']?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $pasien['nik'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&&nik=<?php echo $pasien['nik'];?>" class="btn btn-sm btn-warning">Edit</a>
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
              <h4 class="modal-title">Tambah Data Pasien</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_datapasien.php">
            <div class="modal-body">
            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
              <div class="form-group">
                <label for="exampleInputNik">NIK</label>
                <input type="text" class="form-control" id="exampleInputNik" placeholder="NIK" name="nik" required>
              </div>
              <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama Lengkap" name="nama" required>
              </div>
              <div class="form-group">
                <label for="exampleSelectJenisKelamin">Jenis Kelamin</label>
                  <select class="custom-select JenisKelamin" id="exampleSelectJenisKelamin" placeholder="Jenis Kelamin" name="jeniskelamin">
                    <option selected>Pilih...</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectGolonganDarah">Golongan Darah</label>
                  <select class="custom-select GolonganDarah" id="exampleSelectGolonganDarah" name="goldarah">
                    <option selected>Pilih...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>O</option>
                    <option>AB</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputAlamat">Alamat Lengkap</label>
                <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Masukan Alamat" name="alamat" required>
              </div>
              <div class="form-group">
                <label for="exampleInputTanggalLahir">Tanggal Lahir Pasien</label>
                <input type="date" class="form-control" id="exampleInputTanggalLahir" placeholder="Tanggal Lahir" name="tanggallahir">
              </div>
              <div class="form-group">
                <label for="exampleInputUmur">Umur</label>
                <input type="number" class="form-control" id="exampleInputUmur" placeholder="Umur" name="umur" required>
              </div>
              <div class="form-group">
                <label for="exampleInputNomorTelephone">Nomor Telephone</label>
                <input type="text" class="form-control" id="exampleInputNomorTelephone" placeholder="Nomor Telephone" name="nomorhp" required>
              </div>
              <div class="form-group">
                <label for="exampleInputTanggalPeriksa">Tanggal Periksa</label>
                <input type="date" class="form-control" id="exampleInputTanggalPeriksa" placeholder="Tanggal Periksa" name="tglperiksa">
              </div>
              <div class="form-group">
                <label for="exampleInputNamaPuskesmas">Nama Puskesmas</label>
                <input type="text" class="form-control" id="exampleInputNamaPuskesmas" placeholder="Nama Puskesmas" name="puskesmas" required>
              </div>
              <div class="form-group">
                <label for="exampleInputRiwayatPenyakit">Riwayat Penyakit</label>
                <input type="text" class="form-control" id="exampleInputRiwayatPenyakit" placeholder="Riwayat Penyakit" name="riwayat" required>
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
      function hapus_data(data_nik){
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
           window.location=("delete/hapus_data.php?nik="+data_nik)
          } 
        })
      }
    </script>       
                                       