<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan</title>
</head>
<body>
    <h2>Tambah Kendaraan</h2>
    <form action="proses_tambah.php" method="post">
        <label for="merek">Merek:</label>
        <input type="text" id="merek" name="merek" required><br><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="tahun">Tahun:</label>
        <input type="number" id="tahun" name="tahun" required><br><br>

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
