<!-- Bootsrap -->
<link rel="stylesheet" href="css/bootstrap.css" />
<div class="container">

    <table class="table text-center">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Merek Mobil </th>
            <th>Tipe Mobil </th>
            <th>Plat Nomer</th>
            <th>Foto Mobil</th>
            <th>Harga</th>
            <th>Aksi</th>
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
            <td><?=$data['Merek']?></td>
            <td><?=$data['TipeMobil']?></td>
            <td><?=$data['PlatNomer']?></td>
            <td><img src="mobil/<?=$data['FotoMobil']?>" alt="" width="40%" height="150px"></td>
            <td><?=$data['Harga']?></td>
            <td>
                <a href="FormEditCarList.php?id=<?php echo $data['id']; ?>">EDIT</a>
                /
                <a href="DeleteCarList.php?id=<?php echo $data['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php 
		}
		?>
    </table>
</div>
<script src="js/bootstrap.bundle.js"></script>