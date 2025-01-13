<?php

include "koneksi.php";


class Absensi extends koneksi{

    public function tampilsemua(){
        $query="SELECT *FROM Absensi";
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
 

    public function tambahData($tanggal,$jammasuk,$jamkeluar,$keterangan){
        $query="INSERT INTO Absensi SET tanggal='{$tanggal}',jammasuk='{$jammasuk}',jamkeluar='{$jamkeluar}',keterangan='{$keterangan}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function ubahData($idabsensi,$tanggal,$jammasuk,$jamkeluar,$keterangan){
        $query="UPDATE Absensi SET tanggal='{$tanggal}',jammasuk='{$jammasuk}',
        jamkeluar='{$jamkeluar}',keterangan='{$keterangan}' WHERE idabsensi='{$idabsensi}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function hapusData($idabsensi){
        $query="DELETE FROM Absensi WHERE idabsensi='{$idabsensi}'";
        mysqli_query($this->koneksi,$query);   
    }

    public function cariDataById($idabsensi){
        $query="SELECT * FROM Absensi WHERE idabsensi='{$idabsensi}'";
        $sql=mysqli_query($this->koneksi,$query);   
        $data=mysqli_fetch_assoc($sql);
        return $data;
    }


}