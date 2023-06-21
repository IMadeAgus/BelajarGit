<?php
    include 'config.php';

    if(isset($_POST['tambah'])){
        $Nama = $_POST['Nama'];
        $NoHp = $_POST['NoHp'];
        $Merek = $_POST['Merek'];
        $TipeMobil = $_POST['TipeMobil'];
        $Harga = $_POST['Harga'];
        $TanggalPeminjaman = $_POST['TanggalPeminjaman'];
        $LamaPeminjaman = $_POST['LamaPeminjaman'];
    
        $query = mysqli_query($koneksi,"INSERT INTO tbmobil VALUES(NULL, '" . $_POST['Nama'] . "','" . $_POST['NoHp'] . "', '" . $_POST['Merek'] . "', '" . $_POST['TipeMobil'] . "','" . $_POST['Harga'] . "','" . $_POST['TanggalPeminjaman'] . "','" . $_POST['LamaPeminjaman'] . "')");
    
        if($query) {
            header('Location : tampilTransaksi.php');}
            
    } else {
        die("Gagal terhubung dengan database!");
    }
?>