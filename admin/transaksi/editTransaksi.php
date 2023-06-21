<?php
include 'config.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $NoHp = $_POST['NoHp'];
    $Merek = $_POST['Merek'];
    $TipeMobil = $_POST['TipeMobil'];
    $Harga = $_POST['Harga'];
    $TanggalPeminjaman = $_POST['TanggalPeminjaman'];
    $LamaPeminjaman = $_POST['LamaPeminjaman'];
    
    $sql = "UPDATE tbtransaksi 
            SET Nama                  ='$Nama',
                NoHp                  ='$NoHp',
                Merek                 ='$Merek',
                TipeMobil             ='$TipeMobil',
                Harga                 ='$Harga',
                TanggalPeminjaman     ='$TanggalPeminjaman',
                LamaPeminjaman        ='$LamaPeminjaman'
                WHERE id='$id' ";
        $query = mysqli_query($koneksi, $sql);

        if($query){
            header("location:tampilTransaksi.php");
        }
        else{
            die("Perubahan Gagal disimmpan");
        }
}else{
    die("Gagal Terhubung dengan Database");
}

?>