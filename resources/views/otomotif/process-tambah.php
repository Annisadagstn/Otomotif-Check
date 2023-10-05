<?php
include 'index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $merek = $_POST["merek"];
    $model = $_POST["model"];
    $tahun = $_POST["tahun"];
    $harga = $_POST["harga"];

    // Create (Tambah data kendaraan)
    $query = "INSERT INTO kendaraan (merek, model, tahun, harga) VALUES ('$merek', '$model', '$tahun', '$harga')";
    
    if ($koneksi->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>
