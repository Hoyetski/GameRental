<?php
    session_start();
    
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: admin_panel.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access admin panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main_contaier">
        <img src="GameRental_logo.png" alt="GameRental logo" height="130px">
        <div class="forms_container">
            <form action="index.php" method="post">
                <h3>Login</h3>
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" name="password" required>
                <input type="submit" name="login" value="Login">
            </form>
            <h3>or</h3>
            <form action="index.php" method="post">
                <h3>Password</h3>
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" name="password" required>
                <input type="submit" name="register" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if (isset($_POST['login'])) {
        include('login.php');
    }
    else if (isset($_POST['register'])) {
        include('register.php');
    }
?>