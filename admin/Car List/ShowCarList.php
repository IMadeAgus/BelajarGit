<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Merek Mobil </th>
        <th>Tipe Mobil </th>
        <th>Plat Nomer</th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php 
		include 'koneksi.php';
		$no = 1;
        $sql= ("select * from tbmobil");
		$query = mysqli_query($konek,$sql);
		while($data = mysqli_fetch_array($query)){
			?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?=$data['id']?></td>
        <td><?=$data['MerekMobil']?></td>
        <td><?=$data['TipeMobil']?></td>
        <td><?=$data['PLatNomer']?></td>
        <td><?=$data['Harga']?></td>
        <td>
            <a href="editindex.php?KodeBuku=<?php echo $data['id']; ?>">EDIT</a>
            /
            <a href="hapus.php?KodeBuku=<?php echo $data['id']; ?>">HAPUS</a>
        </td>
    </tr>
    <?php 
		}
		?>
</table>