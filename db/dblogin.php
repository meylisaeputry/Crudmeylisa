<?php
session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);

include "../koneksi.php";
$sql=mysqli_query($koneksi,"SELECT* FROM pengguna WHERE username='$username'
AND password='$password'");
$jumlah_pengguna=mysqli_num_rows($sql);
$data=mysqli_fetch_array($sql);

if($jumlah_pengguna>0){
    $_SESSION['username']=$data['username'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['idpengguna']=$data['id'];
    $_SESSION['level']=$data['level'];

    $_SESSION['status_login']=true;
    $_SESSION['waktu']=time();

    header("location:../index.php");
}else{
    echo "<script type='text/javascript'>
    alert('Username atau password salah');
    window.location='login.php';
    </script>
    ";
    header("location:../login.php?pesan=Gagal");
}