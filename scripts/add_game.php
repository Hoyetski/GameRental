<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $title = $_POST['game_title'];
        $quantity = $_POST['quantity'];
    
        include('../includes/connection.php');
    
        $query = "INSERT INTO games (title, quantity) VALUES ('$title', '$quantity')";
    
        if (mysqli_query($conn, $query)) {
            header('Location: ../admin_panel.php');
        } else {
            echo "Error inserting a new game: " . mysqli_error($conn);
        }
  
        mysqli_close($conn);
    } else {
        header('Location: ../index.php');
    }
?>
