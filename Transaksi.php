<!DOCTYPE html>
<html>
<head>
    <title>Form Transaksi Sewa Mobil</title>
    <style>
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
    </style>
</head>
<body background="bg.jpg">
    <div class="container">
        <h2>Form Transaksi Sewa Mobil</h2>
        <form id="sewaMobilForm" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" required>
            </div>
            <div class="form-group">
                <label for="mobil">Mobil:</label>
                <select id="mobil" required>
                    <option value="">Pilih Mobil</option>
                    <option value="BMW">BMW</option>
                    <option value="Ferari">Ferari</option>
                    <option value="Avanza">Avanza</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lamaSewa">Lama Sewa (hari):</label>
                <input type="number" id="lamaSewa" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script>
        function submitForm(event) {
            event.preventDefault();
            
            // Ambil nilai-nilai input
            var nama = document.getElementById('nama').value;
            var mobil = document.getElementById('mobil').value;
        }