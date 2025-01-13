<?php
include "model/pegawai.php";
$objek = new Pegawai();
$data = $objek->cariDataById($_GET['idpegawai']);
?>

<div class="card card-danger">
  <div class="card-header">
    <h3 class="card-title">Edit Data pegawai</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Pegawai.php?aksi=ubah" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?= $data['idpegawai'] ?>" name="idpegawai" id="idpegawai">
    <div class="card-body">
      <div class="form-group">
        <label for="namapegawai">Nama Pegawai</label>
        <input type="text" class="form-control" id="namapegawai" name="namapegawai" placeholder="namapegawai Anda" value="<?= $data['namapegawai'] ?>" required>
      </div>
      <div class="form-group">
        <label for="nip">nip</label>
        <input type="text" class="form-control" id="nip" name="nip" placeholder="nip" value="<?= $data['nip'] ?>" required>
      </div>
      
      <button type="simpan" class="btn btn-danger float-right ml-3"><i class="fa fa-retweet"></i>Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>Reset</button>
    </div>
</div>
</form>
</div>