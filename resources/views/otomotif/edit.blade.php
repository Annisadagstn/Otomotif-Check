<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
</head>
<body>
    <h2>Edit Kendaraan</h2>
    <?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];

        // Read (Tampilkan data kendaraan
