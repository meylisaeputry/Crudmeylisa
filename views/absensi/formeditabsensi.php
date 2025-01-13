<?php
include "model/absensi.php";
$objek = new Absensi();
$data = $objek->cariDataById($_GET['idabsensi']);
?>

<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Edit Data absensi</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="controller/Absensi.php?aksi=ubah" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?= $data['idabsensi'] ?>" name="idabsensi" id="idabsensi">
    <div class="card-body">
     
      <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal Anda" value="<?= $data['tanggal'] ?>" required>
      </div>
      <div class="form-group">
        <label for="jammasuk">jammasuk</label>
        <input type="time" class="form-control" id="jammasuk" name="jammasuk" placeholder="jammasuk Anda" value="<?= $data['jammasuk'] ?>" required>
      </div>
      <div class="form-group">
        <label for="jamkeluar">jamkeluar</label>
        <input type="time" class="form-control" id="jamkeluar" name="jamkeluar" placeholder="jamkeluar Anda" value="<?= $data['jamkeluar'] ?>" required>
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <select class="form-control" id="keterangan" name="keterangan" value="<?=$data['keterangan']?>">
        <option value="hadir" <?php if ($data['keterangan'] == 'hadir') echo
                                "selected"; ?>>Hadir</option>
          <option value="izin" <?php if ($data['keterangan'] == 'izin') echo
                                "selected"; ?>>Izin</option>
          <option value="alpha" <?php if ($data['keterangan'] == 'alpha') echo
                                "selected"; ?>>Alpha</option>
        </select>
      </div>

      <button type="simpan" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>Reset</button>
    </div>
</div>
</form>
</div>