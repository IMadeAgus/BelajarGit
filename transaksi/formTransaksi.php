<!DOCTYPE html>
<html>

<head>
    <title>Form Transaksi Sewa Mobil</title>

    <link rel="stylesheet" href="formtransaksi.css">
</head>
<body background="bg.jpg">
    <div class="container">
        <h2>Form Transaksi Sewa Mobil</h2>
        <form method="POST" action="prosesTambah.php" id="sewaMobilForm" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="nama" name="Nama">Nama:</label>
                <input type="text" name="Nama" required>
            </div>
            <div class="form-group">
                <label for="NoHp"name="NoHp">NoHp:</label>
                <input type="number" name="NoHp"required>
            </div>
            <div class="form-group">
                <label for="Merek" name="Merek">Merek:</label>
                <input type="text" name="Merek" required>
            </div>
            <div class="form-group">
                <label for="TipeMobil" name="TipeMobil">TipeMobil:</label>
                <input type="text" name="TipeMobil" required>
            </div>
            <div class="form-group">
                <label for="Harga" name="Harga">Harga:</label>
                <input type="number" name="Harga" required>
            </div>
            <div class="form-group">
                <label for="TanggalPeminjaman" name="TanggalPeminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="TanggalPeminjaman" required>
            </div>
            <div class="form-group">
                <label for="LamaPeminjaman" name="LamaPeminjaman">Lama Peminjaman</label>
                <input type="text" name="LamaPeminjaman" required>
            </div>
            <button type="submit" class="btn" name="tambah">Submit</button>
        </form>

    </div>
    </div>
</body>
</html>
