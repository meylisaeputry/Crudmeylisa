<?php

include "../model/admin.php";
$Admin=new Admin();
$aksi=$_GET['aksi'];

if($aksi=='tambah'){
$Admin->tambahData($_POST['namaadmin'],$_POST['username'],$_POST['password']);

}elseif($aksi=='hapus'){
$Admin->hapusData($_GET['idadmin']);

}elseif($aksi=='ubah'){ 
    $Admin->ubahData($_POST['idadmin'],$_POST['namaadmin'],$_POST['username'],
    $_POST['password']);

}
header("location:../index.php?halaman=admin");