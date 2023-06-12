<?php
    include "koneksi.php"; //panggil koneksi

    $MerekMobil=$_POST["MerekMobil"];
    $TipeMobil=$_POST["TipeMobil"];
    $PlatNomer=$_POST["PlatNomer"];
    $Harga=$_POST["Harga"];
 
    //insert data ke tbbuku
    $sql="insert into tbmobil values('','$MerekMobil','$TipeMobil','$PlatNomer','$Harga')";
   //echo $sql;
   $query=mysqli_query($konek,$sql);
    if($query)
    {
        echo"Data sudah disimpan";
    }
    else{
        echo"Data gagal disimpan";
    }
    
?>