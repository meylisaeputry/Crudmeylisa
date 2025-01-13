<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Tambah absensi</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Absensi.php?aksi=tambah" method="POST" enctype="multipart/form-data">
    <div class="card-body-sm ml-2">
      <div class="form-group">
        <label for="namaadmin">Nama admin</label>
        <input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="Nama Anda" required>
      </div> 
      <div class="form-group">
        <label for="namapegawai">Nama pegawai</label>
        <input type="text" class="form-control" id="namapegawai" name="namapegawai" placeholder="Nama Anda" required>
      </div> 
      <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal Anda" required>
      </div> 
      <div class="form-group">
        <label for="jammasuk">jammasuk</label>
        <input type="time" class="form-control" id="jammasuk" name="jammasuk"
          placeholder="jammasuk" required>

          <div class="form-group">
        <label for="jamkeluar">jamkeluar</label>
        <input type="time" class="form-control" id="jamkeluar" name="jamkeluar"
          placeholder="keterangan" required>
      </div> 
    </div>
    <div class="from-group">
        <label>Keterangan</label>
        <select class="form-control" name="level">

          <option value="hadir">Hadir</option>
          <option value="izin">Izin</option>
          <option value="alpha">Alpha</option>
      </div> 
      </select>

    <div class="card-footer">
      <button type="submit" class="btn btn-warning float-right ml-3"><i class="fa fa-save"></i>
        Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>
        Reset</button>
    </div>
  </form>
</div>