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
    
        $sql = "INSERT INTO tb_transaksi (Nama, NoHp, Merek, TipeMobil, Harga, TanggalPeminjaman, LamaPeminjaman ) 
                    VALUE ('$Nama', '$NoHp', '$Merek', '$TipeMobil', '$Harga', '$TanggalPeminjaman', '$LamaPeminjaman')";
        $query = mysqli_query($koneksi, $sql);
    
        if($query) {
            header("location:tampilTransaksi.php");
        } 
    } else {
        die("Gagal terhubung dengan database!");
    }
?>