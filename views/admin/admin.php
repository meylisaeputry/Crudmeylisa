<?php
include "model/admin.php";
?>
<!-- Default box -->
<div class="card">
<button type="button" class="btn btn-block btn-success btn-flat"><div class="card-title"><h4>Halaman Tampil Admin</h4></div></button>


<div class="card-header">
          <h3 class="card-title">admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <body class="card-body">
          <div class="row">
            <div class="col mb-3">
              <a href= "index.php?halaman=tambahadmin" class="btn btn-success float-right"> 
                <i class="fa fa-user-plus"></i>Tambah admin</a>
            </div>
          </div>
        <table idadmin="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $objek = new Admin(); 
            if ($objek->tampilsemua() != 0) {
                foreach ($objek->tampilsemua() as $data) {
                    echo "<tr>
                    <td>$no</td>
                    <td>$data[namaadmin]</td>
                    <td>$data[username]</td>
                    <td>$data[password]</td>
                    <td>
                    <a href='index.php?halaman=editadmin&idadmin=$data[idadmin]' class='btn btn-sm btn-success'
                    title='ubah data'><i class='fa fa-pencil-alt'></i></a> 
                    <a href='controller/Admin.php?aksi=hapus&idadmin=$data[idadmin]' class='btn btn-sm btn-danger'
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