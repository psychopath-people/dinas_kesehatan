<?php
$nik    = $_GET['nik'];
$query = mysqli_query($koneksi,"SELECT * FROM datapasien WHERE nik='$nik'");
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
        <form method='get' action='update/update_datapasien.php'>
            <div class="row">
                <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label for="exampleInputNik">NIK</label>
                <input type="text" class="form-control" id="exampleInputNik" placeholder="NIK" name='nik' value="<?php echo $view['nik'];?>" hidden>
            </div>
            <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap" name='nama' value="<?php echo $view['nama'];?>">
            </div>
            <div class="form-group">
                <label for="exampleSelectJenisKelamin">Jenis Kelamin</label>
                  <select class="custom-select JenisKelamin" id="exampleSelectJenisKelamin" placeholder="Jenis Kelamin" name='jeniskelamin'>
                    <option value="<?php echo $view['jeniskelamin'];?>" selected><?php echo $view['jeniskelamin'];?></option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectGolonganDarah">Golongan Darah</label>
                  <select class="custom-select GolonganDarah" id="exampleSelectGolonganDarah" name='goldarah'>
                    <option value="<?php echo $view['goldarah'];?>" selected><?php echo $view['goldarah'];?></option>
                    <option>A</option>
                    <option>B</option>
                    <option>O</option>
                    <option>AB</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputAlamat">Alamat Lengkap</label>
                <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Masukan Alamat" name='alamat' required value="<?php echo $view['alamat'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputTanggalLahir">Tanggal Lahir Pasien</label>
                <input type="date" class="form-control" id="exampleInputTanggalLahir" placeholder="Tanggal Lahir" name='tanggallahir' value="<?php echo $view['tanggallahir'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputUmur">Umur</label>
                <input type="number" class="form-control" id="exampleInputUmur" placeholder="Umur" name='umur' required value="<?php echo $view['umur'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputNomorTelephone">Nomor Telephone</label>
                <input type="text" class="form-control" id="exampleInputNomorTelephone" placeholder="Nomor Telephone" name='nomorhp' required value="<?php echo $view['nomorhp'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputTanggalPeriksa">Tanggal Periksa</label>
                <input type="date" class="form-control" id="exampleInputTanggalPeriksa" placeholder="Tanggal Periksa" name='tglperiksa' value="<?php echo $view['tglperiksa'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputNamaPuskesmas">Nama Puskesmas</label>
                <input type="text" class="form-control" id="exampleInputNamaPuskesmas" placeholder="Nama Puskesmas" name='puskesmas' required value="<?php echo $view['puskesmas'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputRiwayatPenyakit">Riwayat Penyakit</label>
                <input type="text" class="form-control" id="exampleInputRiwayatPenyakit" placeholder="Riwayat Penyakit" name='riwayat' required value="<?php echo $view['riwayat'];?>">
              </div>
                <button type="submit" class="btn-sm btn-info">Simpan</button>
                <a href="index.php?page=datapasien" class="btn-sm btn-warning">Kembali</a>
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