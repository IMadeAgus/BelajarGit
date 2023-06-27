<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $folder = './mobil/';
        $name_p = $_FILES['FotoMobil']['name'];
        $sumber_p = $_FILES['FotoMobil']['tmp_name'];
        move_uploaded_file($sumber_p, $folder. $name_p);
        $insert = mysqli_query($konek, "INSERT INTO tbmobil VALUES(NULL, '" . $_POST['MerekMobil'] . "','" . $_POST['TipeMobil'] . "', '" . $_POST['Deskripsi'] . "', '" . $name_p . "', '" . $_POST['Harga'] . "')");
        if ($insert) {
            header("location:ShowCarList.php");
        }
        else {
            echo"Data Gagal Disimpan";
        }
    }
    if(isset($_POST['batal'])){
        header("location:ShowCarList.php");
    }
        ?>