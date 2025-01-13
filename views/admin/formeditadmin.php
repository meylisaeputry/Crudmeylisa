<?php
include "model/admin.php";
$objek = new Admin();
$data = $objek->cariDataById($_GET['idadmin']);
?>

<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Edit Data admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Admin.php?aksi=ubah" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?= $data['idadmin'] ?>" name="idadmin" id="idadmin">
    <div class="card-body">
      <div class="form-group">
        <label for="namaadmin">Nama Admin</label>
        <input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="namaadmin Anda" value="<?= $data['namaadmin'] ?>" required>
      </div>
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="username Anda" value="<?= $data['username'] ?>" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="password Anda" value="<?= $data['password'] ?>" required>
      </div>

      <button type="simpan" class="btn btn-success float-right ml-3"><i class="fa fa-retweet"></i>Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>Reset</button>
    </div>
</div>
</form>
</div>