<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $folder = './mobil/';
        $name_p = $_FILES['FotoMobil']['name'];
        $sumber_p = $_FILES['FotoMobil']['tmp_name'];
        move_uploaded_file($sumber_p, $folder. $name_p);
        $insert = mysqli_query($konek, "INSERT INTO tbmobil VALUES(NULL, '" . $_POST['MerekMobil'] . "','" . $_POST['TipeMobil'] . "', '" . $_POST['PlatNomer'] . "', '" . $name_p . "', '" . $_POST['Harga'] . "')");
        if ($insert) {
            echo "Data Berhasil DI Simpan";
        }
        else {
            echo"Data Gagal Disimpan";
        }
    }
    ?>