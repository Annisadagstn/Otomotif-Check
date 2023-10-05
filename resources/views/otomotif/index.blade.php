<?php
include 'index.php';

// Read (Tampilkan data kendaraan)
$query = "SELECT * FROM kendaraan";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h2>Daftar Kendaraan</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Merek</th>
            <th>Model</th>
            <th>Tahun</th>
            <th>Harga</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['merek']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['tahun']; ?></td>
            <td><?php echo $row['harga']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
