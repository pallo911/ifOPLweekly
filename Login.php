<?php
    require'fungsi.php';

    if(asset($_POST))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="post">
        <label for="username">Masukkan Username:</label> <br />
        <input type="text" name="username" require id="username"><br />
        <label for="password">Password:</label> <br />
        <input type="password" name="password" require id="password"><br />
        <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Register!</a> </p>
</body>
</html>