<h3> Data barang </h3>

<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Kode Buku </th>
        <th>Judul Buku </th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Buku</th>
        <th>Lokasi Buku</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $mobil = mysqli_query($konek,"select * FROM tbmobil");
    
    while($hasil =mysqli_fetch_array($mobil)){
    ?>
    <tr align="center">
        <td><img src="mobil/<?php echo $hasil['FotoMobil']; ?>" alt=""></td>

    <tr>
        <?php }?>
</table>

<?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($konek,"delete  from tbbuku where JudulBuku ='$_GET[JudulBuku]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilbuku.php'>";

    }
    ?>