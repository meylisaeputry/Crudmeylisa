<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data Pengguna</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/dbpengguna.php?proses=update" method="POST">
  <input type="hidden" value="<?= $data['id'] ?>" name="id" id="id">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama"
         placeholder="Nama Anda" value="<?=$data['nama']?>" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"
        placeholder="Username Anda" value="<?=$data['username']?>" required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" id="level" name="level" value="<?=$data['level']?>">
        <option value="admin" <?php if ($data['level'] == 'admin') echo
                                "selected"; ?>>admin</option>
          <option value="user" <?php if ($data['level'] == 'user') echo
                                "selected"; ?>>user</option>
        </select>
        <div class="card-footer">
          <button type="simpan" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i>
            Simpan</button>
          <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>
            Reset</button>
        </div>
      </div>
    </div>
  </form>
</div>