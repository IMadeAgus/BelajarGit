<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "dbtransaksi";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke Database");
}
$Nama               = "";
$NoHp               = "";
$Merek              = "";
$TipeMobil          = "";
$Harga              = "";
$TanggalPeminjaman  = "";
$LamaPeminjaman     = "";
$sukses             = "";
$error              = "";

//proses Menambahkan Data
if (isset($_POST['simpan'])) {
    $Nama               = $_POST['Nama'];
    $NoHp               = $_POST['NoHp'];
    $Merek              = $_POST['Merek'];
    $TipeMobil          = $_POST['TipeMobil'];
    $Harga              = $_POST['Harga'];
    $TanggalPeminjaman  = $_POST['TanggalPeminjaman'];
    $LamaPeminjaman     = $_POST['LamaPeminjaman'];

   // Cek apakah nomor telepon sudah ada dalam tabel
   $checkQuery = "SELECT * FROM tbtransaksi WHERE NoHp = '$NoHp'";
   $checkResult = mysqli_query($koneksi, $checkQuery);
   if (mysqli_num_rows($checkResult) > 0) {
       $error = "Nomor telepon sudah ada dalam database";
   } else {
       $sql1 = "INSERT INTO tbtransaksi (Nama, NoHp, Merek, TipeMobil, Harga, TanggalPeminjaman, LamaPeminjaman) 
       VALUES ('$Nama', '$NoHp', '$Merek', '$TipeMobil', '$Harga', '$TanggalPeminjaman', '$LamaPeminjaman')";
       $q1 = mysqli_query($koneksi, $sql1);
       if ($q1) {
           $sukses = "Berhasil Menambahkan Data";
       } else {
           $error = "Gagal Menambahkan Data";
       }
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpport" content="width = device-width, initial-scale = 1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- Untuk Memasukan Data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                       <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                       <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $Nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NoHp" class="col-sm-2 col-form-label">NoHp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?php echo $NoHp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Merek" class="col-sm-2 col-form-label">Merek</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Merek" name="Merek" value="<?php echo $Merek ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="TipeMobil" class="col-sm-2 col-form-label">TipeMobil</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TipeMobil" name="TipeMobil" value="<?php echo $TipeMobil ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Harga" name="Harga" value="<?php echo $Harga ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="TanggalPeminjaman" class="col-sm-2 col-form-label">TanggalPeminjaman</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TanggalPeminjaman" name="TanggalPeminjaman" value="<?php echo $TanggalPeminjaman ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="LamaPeminjaman" class="col-sm-2 col-form-label">LamaPeminjaman</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="LamaPeminjaman" name="LamaPeminjaman" value="<?php echo $LamaPeminjaman ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="SimpanData" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <!-- Untuk Mengeluarkan Data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Transaksi
            </div>
            <div class="card-body">
                <!-- read Database -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NoHp</th>
                            <th scope="col">Merek</th>
                            <th scope="col">TipeMobil</th>
                            <th scope="col">Harga</th>
                            <th scope="col">TanggalPeminjaman</th>
                            <th scope="col">LamaPeminjaman</th>
                            <th scope="col">aksi</th>
                        </tr>
                        <tbody>
                            <?php
                            $sql2 =" SELECT * FROM tbtransaksi order by id desc";
                            $q2   = mysqli_connect($Koneksi, $sql2);
                            while($r2 = mysqli_fetch_array($q2)){
                                $Nama   = $r2['Nama'];
                                $NoHp   = $r2['NoHp'];
                                $Merek   = $r2['Merek'];
                                $TipeMobil   = $r2['Tipe$TipeMobil'];
                                $Harga   = $r2['Harga'];
                                $TanggalPeminjaman   = $r2['Tangg$TanggalPeminjaman'];
                                $LamaPeminjaman   = $r2['Lama$LamaPeminjaman'];                            }
                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>

</html>