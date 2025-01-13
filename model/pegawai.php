<?php

include "koneksi.php";

class Pegawai extends koneksi{

    public function tampilsemua(){
        $query="SELECT *FROM Pegawai";
        $sql=mysqli_query($this->koneksi,$query);

        while($data=mysqli_fetch_array($sql)){
            $datas[]=$data;

        }
        if (isset($datas)){
            return $datas;
        }else{
            return 0;
        }
    }


    public function tambahData($namapegawai,$nip){
        $query="INSERT INTO Pegawai SET namapegawai='{$namapegawai}',nip='{$nip}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function ubahData($idpegawai,$namapegawai,$nip){
        $query="UPDATE Pegawai SET namapegawai='{$namapegawai}', nip='{$nip}' WHERE idpegawai='{$idpegawai}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function hapusData($idpegawai){
        $query="DELETE FROM Pegawai WHERE idpegawai='{$idpegawai}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function cariDataById($idpegawai){
        $query="SELECT * FROM Pegawai WHERE idpegawai='{$idpegawai}'";
        $sql=mysqli_query($this->koneksi,$query);   
        $data=mysqli_fetch_assoc($sql);
        return $data;
    }


}