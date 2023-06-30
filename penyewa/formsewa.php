<!-- <!doctype html>
<html lang="en">

<head>

    <title>Form Sewa</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form_sewa.css">


</head>



<body background="">



    <h4 align="center">FORM SEWA</h4>
    <hr />

    <form name="formsewa" method="post" action="simpansewa.php">

        <table border="1" width="10" align="center">

            <tr>
                <td>Masukkan Nama</td>
            </tr>
            <tr>
                <td><input type="text" placeholder="" name="nama" size="40"></td>
            </tr>

            <tr>
                <td>Masukkan No Handphone</td>
            </tr>
            <tr>
                <td><input type="text" placeholder="" name="no_hp" size="40"></td>
            </tr>

            <tr>
                <td>Masukkan No KTP/NIK </td>
            </tr>
            <tr>
                <td><input type="text" placeholder="" name="no_ktp" size="40"></td>
            </tr>

            <tr>
                <td>Tanggal Peminjaman</td>
            </tr>
            <tr>
                <td><input type="date" placeholder="" name="tgl_peminjaman"></td>
            </tr>

            <tr>
                <td>Tanggal Pengembalian</td>
            </tr>
            <tr>
                <td><input type="date" placeholder="" name="tgl_pengembalian"></td>
            </tr>

            <tr>
                <td>Lama Peminjaman(Hari)</td>
            </tr>

            <tr>
                <td><input type="number" placeholder="" name="lama_peminjaman" size="40"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Kirim" />
                    <input type="reset" value="Batal" />
                    <a href="tampilsewa.php">Tampil Data</a>
                </td>
            </tr>

        </table>
    </form>

</body>

</html> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="fpdf/sewa.css">
</head>

<body>
    <div class="container">

        <form name="formsewa" action="simpansewa.php" method="POST" class="formsewa">
            <p style="font-size: 2em; font-weight: 850;">BRAVO RENTCAR </p>

            <div class="input-group"><input type="text" placeholder="Nama" name="nama"></div>
            <div class="input-group"><input type="text" placeholder="NO HP" name="no_hp"></div>
            <div class="input-group"><input type="text" placeholder="NO KTP" name="no_ktp"></div>
            <div class="input-group"><input type="date" placeholder="TANGGAL PEMINJAMAN" name="tgl_peminjaman"></div>
            <div class="input-group"><input type="date" placeholder="TANGGAL PENGEMBALIAN" name="tgl_pengembalian"></div>
            <div class="input-group"><input type="text" placeholder="LAMA PEMINJAMAN (HARI)" name="lama_peminjaman"></div>
            <div class="input-group">
                <a class="btn" href="simpansewa.php">KIRIM</a>
            </div>
            <div class="input-group">

            </div>

        </form>
    </div>
</body>

</html> -->
<html>

<head>
    <?php include 'koneksi.php'; ?>
    <tittle></tittle>

    <link rel="stylesheet" href="css/bootstrap.css" />


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container vh-100">

        <div class="row d-flex h-100 justify-content-center align-content-center">

            <div class="col-lg-6 border border-3 rounded-3 form ">

                <h1 class="text-center border-bottom border-dark py-4">Form Sewa</h1>
                <form name="FormAddCars" method="post" enctype="multipart/form-data" action="simpansewa.php">

                    <div class="mx-3 ">
                        <label class="form-label mt-3">Nama</label>
                        <input type="text" class="form-control" name="nama">
                        <label class="form-label mt-3">No Hp </label>
                        <input type="text" class="form-control" name="no_hp">
                        <label class="form-label mt-3 ">No KTP </label>
                        <input type="text" class="form-control" name="no_ktp">
                        <label class="form-label mt-3 ">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tgl_peminjaman">
                        <label class="form-label mt-3 ">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tgl_pengembalian">
                        <label class="form-label mt-3 ">Lama Peminjaman(Hari)</label>
                        <input type="number" class="form-control" name="lama_peminjaman">

                        <div class="d-flex my-5">
                            <input type="submit" class=" w-40  me-2 btn btn-danger border border-0" value="Cancel" name="batal">
                            <input type="submit" class="w-40 ms-2 btn btn-primary border border-0" value="simpan" name="simpan">
                            <a align="right" href="tampilsewa.php" input type="submit" class="w-40 ms-2 btn btn-success border border-0" value="Tampil">Tampil Data</a>

                        </div>
                </form>
            </div>
        </div>
    </div>
</body>