<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>

<h2>Login</h2>
<form method="post" action="process_login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>