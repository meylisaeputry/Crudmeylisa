<?php

include "../model/absensi.php";

$Absensi=new Absensi();
$aksi=$_GET['aksi'];

if($aksi=='tambah'){
$Absensi->tambahData($_POST['tanggal'],$_POST['jammasuk'],$_POST['jamkeluar'],$_POST['keterangan']);

}elseif($aksi=='hapus'){
$Absensi->hapusData($_GET['idabsensi']);

}elseif($aksi=='ubah'){ 
    $Absensi->ubahData($_POST['idabsensi'],$_POST['tanggal'],$_POST['jammasuk'],
    $_POST['jamkeluar'],$_POST['keterangan']);

}
header("location:../index.php?halaman=absensi");