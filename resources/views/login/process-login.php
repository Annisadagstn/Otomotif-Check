<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Anda bisa melakukan validasi lebih lanjut di sini, seperti memeriksa data pengguna di database.

    // Contoh sederhana, hanya satu pengguna dengan username "admin" dan password "password"
    if ($username === "admin" && $password === "password") {
        // Login berhasil, simpan data pengguna ke sesi
        $_SESSION["username"] = $username;

        // Redirect ke halaman dashboard atau halaman lain yang sesuai
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan kesalahan
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }
}
?>
