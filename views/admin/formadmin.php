<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Tambah admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Admin.php?aksi=tambah" method="POST" enctype="multipart/form-data">
    <div class="card-body-sm ml-2">
      <div class="form-group">
        <label for="namaadmin">Nama Admin</label>
        <input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="Nama Anda" required>
      </div> 
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="username Anda" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password"
          placeholder="password" required>


      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-success float-right ml-3"><i class="fa fa-save"></i>
        Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>
        Reset</button>
    </div>
  </form>
</div>