<!DOCTYPE html>
<html>

<head>
    <title>Form Transaksi Sewa Mobil</title>
    <style>
<<<<<<< HEAD
       
=======
    /* Gaya CSS untuk tampilan form */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 7px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group select {
        width: 100%;
        padding: 7px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        text-align: center;
        background-color: #4CAF50;
        color: #ffffff;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }
>>>>>>> e7474f01e427cc0df080591c54f401180cf0e241
    </style>
    <link rel="stylesheet" href="transaksi.css">
</head>
<<<<<<< HEAD
<body background="bg.jpg" >
=======

<body background="bg.jpg">
>>>>>>> e7474f01e427cc0df080591c54f401180cf0e241
    <div class="container">
        <h2>Form Transaksi Sewa Mobil</h2>
        <form method="POST" action="HitungTotalHarga.php" id="sewaMobilForm" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="nama" name="Nama">Nama:</label>
                <input type="text" id="nama" required>
            </div>
            <div class="form-group">
                <label for="NoHp"name="NoHp">NoHp:</label>
                <input type="number" id="NoHp"required>
            </div>
            <div class="form-group">
                <label for="Merek" name="Merek">Merek:</label>
                <input type="text" id="Merek" required>
            </div>
            <div class="form-group">
                <label for="TipeMobil" name="TipeMobil">TipeMobil:</label>
                <input type="text" id="TipeMobil" required>
            </div>
            <div class="form-group">
                <label for="TanggalPeminjaman" name="TanggalPeminjaman">Tanggal Peminjaman:</label>
                <input type="text" id="TanggalPeminjaman" required>
            </div>
            <div class="form-group">
                <label for="LamaPenyewaan" name="LamaPenyewaan">LamaPenyewaan</label>
                <input type="text" id="LamaPenyewaan" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
<<<<<<< HEAD
    </div>
=======
    </div>
</body>
</head>
>>>>>>> e7474f01e427cc0df080591c54f401180cf0e241
