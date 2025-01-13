<div class="card card-danger">
  <div class="card-header">
    <h3 class="card-title">Tambah pegawai</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Pegawai.php?aksi=tambah" method="POST" enctype="multipart/form-data">
    <div class="card-body-sm ml-2">
      <div class="form-group">
        <label for="namapegawai">Nama Pegawai</label>
        <input type="text" class="form-control" id="namapegawai" name="namapegawai" placeholder="Nama Anda" required>
      </div> 
      <div class="form-group">
        <label for="nip">Nip</label>
        <input type="text" class="form-control" id="nip" name="nip" placeholder="nip Anda" required>
      </div>
      
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-danger float-right ml-3"><i class="fa fa-save"></i>
        Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>
        Reset</button>
    </div>
  </form>
</div>