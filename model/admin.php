<?php

include "koneksi.php";

class Admin extends koneksi{

    public function tampilsemua(){
        $query="SELECT *FROM Admin";
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


    public function tambahData($namaadmin,$username,$password){
        $query="INSERT INTO Admin SET namaadmin='{$namaadmin}',username='{$username}',password='{$password}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function ubahData($idadmin,$namaadmin,$username,$password){
        $query="UPDATE Admin SET namaadmin='{$namaadmin}',username='{$username}',
        password='{$password}' WHERE idadmin='{$idadmin}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function hapusData($idadmin){
        $query="DELETE FROM Admin WHERE idadmin='{$idadmin}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function cariDataById($idadmin){
        $query="SELECT * FROM Admin WHERE idadmin='{$idadmin}'";
        $sql=mysqli_query($this->koneksi,$query);   
        $data=mysqli_fetch_assoc($sql);
        return $data;
    }


}