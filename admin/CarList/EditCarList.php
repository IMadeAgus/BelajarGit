<?php
include 'koneksi.php';

if(isset($_POST['ubah'])){
    $folder = './mobil/';
    $name_p = $_FILES['FotoMobil']['name'];
    $sumber_p = $_FILES['FotoMobil']['tmp_name'];
    move_uploaded_file($sumber_p, $folder. $name_p);
    $id = $_POST['id'];
    $MerekMobil = $_POST['MerekMobil'];
    $TipeMobil = $_POST['TipeMobil'];
    $PlatNomer = $_POST['PlatNomer'];
    $Harga = $_POST['Harga'];
    $sql = "UPDATE tbmobil
                SET Merek='$MerekMobil', 
                    TipeMobil='$TipeMobil', 
                    PlatNomer='$PlatNomer',
                    FotoMobil='$name_p', 
                    Harga='$Harga' 
                WHERE id='$id'";
    $query = mysqli_query($konek, $sql);

    if($query) {
        header("location:ShowCarList.php?pesan=update");
    } else {
        die("Perubahan Gagal Disimpan");
    }
} else {
    die("Gagal terhubung dengan database!");
}

?>