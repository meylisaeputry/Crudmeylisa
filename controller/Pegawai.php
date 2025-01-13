<?php

include "../model/pegawai.php";
$Pegawai=new Pegawai();
$aksi=$_GET['aksi'];

if($aksi=='tambah'){
$Pegawai->tambahData($_POST['namapegawai'],$_POST['nip']);

}elseif($aksi=='hapus'){
$Pegawai->hapusData($_GET['idpegawai']);

}elseif($aksi=='ubah'){ 
    $Pegawai->ubahData($_POST['idpegawai'],$_POST['namapegawai'],$_POST['nip']);

}
header("location:../index.php?halaman=pegawai");