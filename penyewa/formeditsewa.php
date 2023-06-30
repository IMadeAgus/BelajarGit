<?php
include 'koneksi.php';

if (!isset($_GET['id_sewa'])) {
  header('Location: tampilsewa.php');
}

$id = $_GET['id_sewa'];

if ($id == null) {
  header('Location: tampilsewa.php');
}

$sql = "SELECT * from tb_penyewa ";
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("Data tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>
<!-- Bootsrap -->
<link rel="stylesheet" href="css/bootstrap.css" />

<body>

  <div class="container-fluid vh-100">
    <!-- flex-container -->
    <div class="row d-flex h-100  justify-content-center align-content-center">
      <!-- flex-item -->
      <div class="col-lg-6  border border-3 rounded-3 ">
        <!-- Judul-form -->
        <h1 class="text-center border-bottom border-dark py-4">Form Edit Data Penyewa</h1>
        <form name="formeditsewa" method="post" enctype="multipart/form-data" action="editsewa.php">
          <input type="hidden" name="id_sewa" value="<?php echo $data['id_sewa'] ?>" />
          <!-- user-input -->
          <div class="mx-3">
            <label class="form-label mt-3">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
            <label class="form-label mt-3">No HP </label>
            <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp'] ?>">
            <label class="form-label mt-3 ">No KTP </label>
            <input type="text" class="form-control" name="no_ktp" value="<?php echo $data['no_ktp'] ?>">
            <label class="form-label mt-3 ">Tgl Peminjaman</label>
            <input type="date" class="form-control" name="tgl_peminjaman" value="<?php echo $data['tgl_peminjaman'] ?>">
            <label class="form-label mt-3 ">Tgl Pengembalian</label>
            <input type="date" class="form-control" name="tgl_pengembalian" value="<?php echo $data['tgl_pengembalian'] ?>">
            <label class="form-label mt-3 ">Lama Peminjaman</label>
            <input type="text" class="form-control" name="lama_peminjaman" value="<?php echo $data['lama_peminjaman'] ?>">
            <!-- Button -->
            <div class=" d-flex my-5">
              <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel" name="batal">
              <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan" name="ubah">
            </div>
        </form>
      </div>
    </div>
  </div>




  <header>
    <h3>Edit List Mobil </h3>
  </header>




</body>

</html>