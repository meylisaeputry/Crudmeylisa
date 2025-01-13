<?php

include "model/pegawai.php";

?>
<!-- Default box -->
<div class="card">
<button type="button" class="btn btn-block btn-danger btn-flat"><div class="card-title"><h4>Halaman Tampil Pegawai</h4></div></button>


<div class="card-header">
          <h3 class="card-title">pegawai</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <body class="card-body">
          <div class="row">
            <div class="col mb-3">
              <a href= "index.php?halaman=tambahpegawai" class="btn btn-danger float-right"> 
                <i class="fa fa-user-plus"></i>Tambah pegawai</a>
            </div>
          </div>
        <table idadmin="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nip</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $objek = new Pegawai(); 
            if ($objek->tampilsemua() != 0) {
                foreach ($objek->tampilsemua() as $data) {
                    echo "<tr>
                    <td>$no</td>
                    <td>$data[namapegawai]</td>
                    <td>$data[nip]</td>
                    <td>
                    <a href='index.php?halaman=editpegawai&idpegawai=$data[idpegawai]' class='btn btn-sm btn-success'
                    title='ubah data'><i class='fa fa-pencil-alt'></i></a> 
                    <a href='controller/Pegawai.php?aksi=hapus&idpegawai=$data[idpegawai]' class='btn btn-sm btn-danger'
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