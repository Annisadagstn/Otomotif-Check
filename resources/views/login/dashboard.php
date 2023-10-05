<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Tampilkan halaman dashboard atau konten yang sesuai di sini
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat datang, <?php echo $_SESSION["username"]; ?></h2>
<p>Ini adalah halaman dashboard.</p>

<a href="logout.php">Logout</a>

</body>
</html>
