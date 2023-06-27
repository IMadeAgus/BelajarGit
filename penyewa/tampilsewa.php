<html>

<head>
  <tittle></tittle>
</head>

<body>
  
  <h4 align="center">DATA PENYEWA</h4>
  <table border="1" width="100%">
    <tr align="center">
      <td>No</td>
      <td>Nama</td>
      <td>No Handphone</td>
      <td>No KTP/NIK</td>
      <td>Tanggal Peminjaman</td>
      <td>Tanggal Pengembalian</td>
      <td>Lama Peminjaman (hari)</td>
      <td>Aksi</td>
    </tr>

    <?php
    include 'koneksi.php';
    $sql = "select * from tb_penyewa";
    $query = mysqli_query($konek, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>

        <td><?php echo $no; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['no_hp']; ?></td>
        <td><?php echo $data['no_ktp']; ?></td>
        <td><?php echo $data['tgl_peminjaman']; ?></td>
        <td><?php echo $data['tgl_pengembalian']; ?></td>
        <td><?php echo $data['lama_peminjaman']; ?></td>
        <td><a href="hapus_sewa.php?id_penyewa=<?php echo $data['id_penyewa']; ?>">Hapus |
            <a href="print.php?id_penyewa=<?php echo $data['id_penyewa'] ?>">Cetak</a> </a>
        </td>

      </tr>
    <?php
      $no++;
    }
    ?>
</body>

</html>