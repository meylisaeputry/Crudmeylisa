<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <body style="margin: 0; padding: 0; height: 100vh; background-image: url('images/10.jpg');  background-size: contain; background-position: center; display: flex; justify-content: center; align-items: center;">

    <div style="background-color: rgba(255, 255, 255, 0.8); padding: 40px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
      
  <!-- Google Font: Source Sans Pro-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>          
<body class="login-page" style="min-height: 496.781px;">
<div class="login-box">
  <div class="login-logo">
  <img src="images/3.jpg" alt="Profile Picture" style="width: 130px; height: 130px; border-radius: 50%; margin-bottom: 5px;">
   <p>Aplikasi Penjualan Honda</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
      
<?php
if (isset($_GET['pesan']) == 'Gagal') {
  echo '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Failed!</h5>
      Username atau Password anda salah!!!  
    </div>';
}
?>
      <form action="db/dblogin.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" 
          placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" 
          placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
              
            </div>
          </div>
        </div>
        <div class="row float-right">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" style="width: 100%; padding: 8px; background-color: #007BFF; color: white; border: none; cursor: pointer;">Log in</button>

          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>