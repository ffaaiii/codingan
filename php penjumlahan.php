<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Penjumlahan PHP</title>
</head>
<body>

  <h2>Form Penjumlahan Dua Angka</h2>

  <form method="post">
    <label>Angka Pertama:</label><br>
    <input type="number" name="angka1" required><br><br>

    <label>Angka Kedua:</label><br>
    <input type="number" name="angka2" required><br><br>

    <button type="submit" name="hitung">Jumlahkan</button>
  </form>

  <?php
  if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 + $angka2;

    echo "<h3>Hasil Penjumlahan: $angka1 + $angka2 = <strong>$hasil</strong></h3>";
  }
  ?>

</body>
</html>