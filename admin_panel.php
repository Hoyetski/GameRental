<?php
    session_start();

    if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] === true) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="panel_container">
        <header>
            <img src="GameRental_logo.png" alt="GameRental logo" height="40px">
        </header>
        <section>
            <h2>Sekcja wypożyczania gier</h2>
                <form action="add_rental.php" method="post">
                <input type="email" required placeholder="Email" name="email">
                <input type="text" required placeholder="Title" name="game_title">
                <input type="date" required name="date">
                <input type="submit" value="Rent">
            </form>
        </section>
        <section>
            <h2>Sekcja wszystkich wypożyczeń</h2>
            <?php include('display_rentals.php'); ?>
        </section>
        <section>
            <h2>Sekcja dostępnych gier</h2>
            <?php include('display_games.php'); ?>
        </section>
        <section>
            <h2>Sekcja dodawania gier</h2>
                <form action="add_game.php" method="post">
                <input type="text" placeholder="Title" required name="game_title">
                <input type="number" placeholder="Quantity" required min='0' name="quantity">
                <input type="submit" value="Add">
            </form>
        </section>
        <section>
            <h2>Sekcja dostępnych klientów</h2>
            <?php include('display_clients.php'); ?>
        </section>
        <section>
            <h2>Sekcja dodawania klientów</h2>
                <form action="add_client.php" method="post">
                <input type="text" placeholder="First name" required name="first_name">
                <input type="text" placeholder="Last name" required name="last_name">
                <input type="email" placeholder="E-mail" required name="email">
                <input type="submit" value="Add">
            </form>
        </section>
        <a href="logout.php">Logout</a>
        <footer>© 2023 Kacper Chojecki.</footer>
    </div>
</body>
</html>
