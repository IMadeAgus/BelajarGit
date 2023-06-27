<html>

<head>
    include 'koneksi.php';
    <tittle></tittle>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container vh-100">
        <!-- flex-container -->
        <div class="row d-flex h-100 justify-content-center align-content-center">
            <!-- flex-item -->
            <div class="col-lg-6 border border-3 rounded-3 form ">
                <!-- Judul-form -->
                <h1 class="text-center border-bottom border-dark py-4">Form Add Car List</h1>
                <form name="FormAddCars" method="post" enctype="multipart/form-data" action="simpansewa.php">
                    <!-- user-input -->
                    <div class="mx-3 ">
                        <label class="form-label mt-3">Nama</label>
                        <input type="text" class="form-control" name="nama">
                        <label class="form-label mt-3">No Hp </label>
                        <input type="text" class="form-control" name="no_hp">
                        <label class="form-label mt-3 ">No KTP </label>
                        <input type="text" class="form-control" name="no_ktp">
                        <label class="form-label mt-3 ">Tanggal Peminjaman</label>
                        <input type="file" class="form-control" name="tgl_peminjaman">
                        <label class="form-label mt-3 ">Tanggal Pengembalian</label>
                        <input type="number" class="form-control" name="tgl_pengembalian">
                        <label class="form-label mt-3 ">Lama Peminjaman(Hari)</label>
                        <input type="number" class="form-control" name="lama_peminjaman">
                        <!-- Button -->
                        <div class="d-flex my-5">
                            <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel"
                                name="batal">
                            <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan"
                                name="simpan">
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-4">
                <h2>Data Penyewa</h2>
            </div>
            <!-- <div class="col-4"></div>
        <div class="col-4 d-flex align-items-end justify-content-end">
            <a class="btn btn-success" href="FormCarList.php">Tambah Mobil</a>
        </div> -->
        </div>
        <table class="table table-bordered text-center mt-2">
            <tr>
                <th>Nama</th>
                <th>No Hp</th>
                <th>No KTP </th>
                <th>TGl Peminjaman </th>
                <th>TGL Pengembalian</th>
                <th>Lama Peminjaman</th>
                <th>Aksi</th>
            </tr>
            <?php 
		include 'koneksi.php';
		$no = 1;
        $sql= ("select * from tb_penyewa");
		$query = mysqli_query($konek,$sql);
		while($data = mysqli_fetch_array($query)){
			?>
            <tr class="align-middle">
                <td><?php echo $no++; ?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['no_hp']?></td>
                <td><?=$data['no_ktp']?></td>
                <td><?=$data['tgl_peminjaman']?></td>
                <td><?=$data['tgl_pengembalian']?></td>
                <td><?=$data['lama_peminjaman']?></td>
                <td>
                    <a class="btn btn-info" href="editsewa.php?id=<?php echo $data['id_penyewa']; ?>">EDIT</a>

                    <a class="btn btn-danger" href="hapus_sewa.php?id=<?php echo $data['id_penyewa']; ?>"
                        onclick="return confirm('Yakin mau Hapus?')">HAPUS</a>
                </td>
            </tr>
            <?php 
		}
		?>
        </table>
        <div class="row">
            <div class="d-flex align-items-end justify-content-end">
                <a href="print.php" class="btn btn-success" A>
                    Cetak
                </a>
            </div>
        </div>
    </div>

</body>

</html>