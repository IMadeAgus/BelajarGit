<!-- Bootsrap -->
<link rel="stylesheet" href="css/bootstrap.css" />
<div class="container">
    <div class="row d-flex align-items-center justify-content-between mt-4">
        <div class="col-6">
            <h2>Manage Car List</h2>
        </div>
        <div class="col-6">
            <a class="btn btn-success" href="FormCarList.php">Tambah Mobil</a>
        </div>
    </div>
    <table class="table table-bordered text-center mt-2">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Merek Mobil </th>
            <th>Tipe Mobil </th>
            <th>Deskripsi</th>
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
        <tr class="align-middle">
            <td><?php echo $no++; ?></td>
            <td><?=$data['id']?></td>
            <td><?=$data['Merek']?></td>
            <td><?=$data['TipeMobil']?></td>
            <td><?=$data['Deskripsi']?></td>
            <td><img src="mobil/<?=$data['FotoMobil']?>" alt="" style="max-width: 100px; max-height: 150px"></td>
            <td><?=$data['Harga']?></td>
            <td>
                <a class="btn btn-info" href="FormEditCarList.php?id=<?php echo $data['id']; ?>">EDIT</a>

                <a class="btn btn-danger" href="DeleteCarList.php?id=<?php echo $data['id']; ?>"
                    onclick="return confirm('Yakin mau Hapus?')">HAPUS</a>
            </td>
        </tr>
        <?php 
		}
		?>
    </table>
</div>
<script src="js/bootstrap.bundle.js"></script>