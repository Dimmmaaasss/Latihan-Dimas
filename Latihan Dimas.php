<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Bilangan</title>
</head>
<body>
    <h1>Penjumlahan Dua Bilangan</h1>
    <form method="post" action="">
        <label for="bilangan1">Bilangan 1:</label>
        <input type="number" name="bilangan1" required>
        <br>
        <label for="bilangan2">Bilangan 2:</label>
        <input type="number" name="bilangan2" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $jumlah = $bilangan1 + $bilangan2;
        echo "<h2>Hasil: $bilangan1 + $bilangan2 = $jumlah</h2>";
    }
    ?>
</body>
</html>