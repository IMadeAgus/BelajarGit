<!doctype html>
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

</html>