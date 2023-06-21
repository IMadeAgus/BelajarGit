<!DOCTYPE html>
<html>

<head>
    <title>Form Transaksi</title>
</head>

<body>
    <header>
        <h3>Transaksi</h3>
    </header>

    <form action="prosesTambah.php" method="POST">

        <fieldset>

            <p>
                <label for="Nama">Nama: </label>
                <input type="text" name="Nama" placeholder="Nama Buku" />
            </p>
            <p>
                <label for="NoHp">NoHp: </label>
                <input type="text" name="NoHp" placeholder="NoHp" />
            </p>
            <p>
                <label for="Merek">Merek: </label>
                <input type="text" name="Merek" placeholder="Merek" />
            </p>
            <p>
                <label for="TipeMobil">TipeMobil: </label>
                <input type="text" name="TipeMobil" placeholder="TipeMobil Terbit" />
            </p>
            <p>
                <label for="Harga">Harga: </label>
                <input type="text" name="Harga" placeholder="Harga Terbit" />
            </p>
            <p>
                <label for="TanggalPeminjaman">TanggalPeminjaman: </label>
                <input type="text" name="TanggalPeminjaman" placeholder="TanggalPeminjaman Terbit" />
            </p>
            <p>
                <label for="LamaPeminjaman">LamaPeminjaman: </label>
                <input type="text" name="LamaPeminjaman" placeholder="LamaPeminjaman Terbit" />
            </p>
            <p>
                <input type="submit" value="Tambah Buku" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>