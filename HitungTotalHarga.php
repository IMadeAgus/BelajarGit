<?php
$Nama = $_POST['Nama'];
$Mobil = $_POST['Mobil'];
$LamaSewa = $_POST['LamaSewa'];?>

echo "<div>
        <form>
        <label for="Nama" $Nama</label>
    </div>
      <div>
        <label for="Mobil"name="Mobil">$Mobil</label>
    <select id="Mobil" required>
        <option value="">Pilih Mobil</option>
        <option value="Toyota">Toyota</option>
        <option value="Suzuki">Suzuki</option>
        <option value="Avanza">Avanza</option>
    </select>
    </div>
    <div class="form-group">
        <label for="LamaSewa" name="LamaSewa">Lama Sewa (hari):</label>
    </div>
    </div>
";
?>