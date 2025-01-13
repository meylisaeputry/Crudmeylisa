<?php

include "model/absensi.php";

?>
<!-- Default box -->
<div class="card">
<button type="button" class="btn btn-block btn-warning btn-flat"><div class="card-title"><h4>Halaman Tampil absensi</h4></div></button>


<div class="card-header">
          <h3 class="card-title">absensi</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widabsensiget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <body class="card-body">
          <div class="row">
            <div class="col mb-3">
              <a href= "index.php?halaman=tambahabsensi" class="btn btn-warning float-right"> 
                <i class="fa fa-user-plus"></i>Tambah absensi</a>
            </div>
          </div>
        <table idabsensi="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Jam masuk</th>
                <th>Jam keluar</th>
                <th>keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead> 
        <tbody>
            <?php
            $no = 1; 
            $objek = new Absensi(); 
            if ($objek->tampilsemua() != 0) {
                foreach ($objek->tampilsemua() as $data) {
                    echo "<tr>
                    <td>$no</td>
                    <td>$data[idadmin]</td>
                    <td>$data[idpegawai]</td>
                    <td>$data[tanggal]</td>
                    <td>$data[jammasuk]</td>
                    <td>$data[jamkeluar]</td>
                    <td>$data[keterangan]</td>

                    <td>
                    <a href='index.php?halaman=editabsensi&idabsensi=$data[idabsensi]' class='btn btn-sm btn-success'
                    title='ubah data'><i class='fa fa-pencil-alt'></i></a> 
                    <a href='controller/Absensi.php?aksi=hapus&idabsensi=$data[idabsensi]' class='btn btn-sm btn-danger'
                    title='hapus data'><i class='fa fa-trash-alt'></i></a>
                    </div>  
                    </td>
                </tr>";
                    $no++;
                }
            }
          
            ?>
        </tbody>
</table>
</body>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->