<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $email = $_POST['email'];
    $title = $_POST['game_title'];
    $date = $_POST['date'];

    include('../includes/connection.php');

    $email = $_POST['email'];
    $game_title = $_POST['game_title'];

    $clientQuery = "SELECT id FROM clients WHERE email = '$email'";
    $clientResult = mysqli_query($conn, $clientQuery);

    if (mysqli_num_rows($clientResult) > 0) {
        $clientRow = mysqli_fetch_assoc($clientResult);
        $clientId = $clientRow['id'];

        $gameQuery = "SELECT id, quantity FROM games WHERE title = '$game_title'";
        $gameResult = mysqli_query($conn, $gameQuery);

        if (mysqli_num_rows($gameResult) > 0) {
            $gameRow = mysqli_fetch_assoc($gameResult);
            $gameId = $gameRow['id'];
            $currentQuantity = $gameRow['quantity'];

            if ($currentQuantity > 0) {
                $insertQuery = "INSERT INTO rentals (game_id, client_id, rental_date) VALUES ($gameId, $clientId, '$date')";

                if (mysqli_query($conn, $insertQuery)) {
                    $updateQuantityQuery = "UPDATE games SET quantity = quantity - 1 WHERE id = $gameId";
                    mysqli_query($conn, $updateQuantityQuery);

                    header('Location: ../admin_panel.php');
                } else {
                    echo "Error inserting a new rental record: " . mysqli_error($conn);
                }
            } else {
                echo "<script>alert('No available copies of the game!'); window.location.href = '../admin_panel.php';</script>";
            }
        } else {
            echo "<script>alert('Game not found!'); window.location.href = '../admin_panel.php';</script>";
        }
    } else {
        echo "<script>alert('Client not found!'); window.location.href = '../admin_panel.php';</script>";
    }

    mysqli_close($conn);
} else {
    header('Location: ../index.php');
}
?>
