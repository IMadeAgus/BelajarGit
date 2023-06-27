<table border="2" width="100%">
    <tr>
        <th>No</th>
        <th>id</th>
        <th>Nama</th>
        <th>NoHp</th>
        <th>Merek</th>
        <th>TipeMobil</th>
        <th>Harga</th>
        <th>TanggalPeminjaman</th>
        <th>LamaPeminjaman</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
include 'config.php';
$no = 1;
$sql= ("select * from tbtransaksi");
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?= $data['id']?></td>
        <td><?= $data['Nama']?></td>
        <td><?= $data['NoHp']?></td>
        <td><?= $data['Merek']?></td>
        <td><?= $data['TipeMobil']?></td>
        <td><?= $data['Harga']?></td>
        <td><?= $data['TanggalPeminjaman']?></td>
        <td><?= $data['LamaPeminjaman']?></td>
        <td>
            <a href="formEditTransaksi.php?id=<?php echo $data['id']; ?>">EDIT</a>
            |
            <a href="hapusTransaksi.php?id=<?php echo $data['id']; ?>">HAPUS</a>
        </td>
    </tr>
    <?php
}
?>

</table>