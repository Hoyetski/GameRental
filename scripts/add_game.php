<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $title = $_POST['game_title'];
        $quantity = $_POST['quantity'];
    
        include('../includes/connection.php');
    
        $checkQuery = "SELECT * FROM games WHERE title = '$title'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('This game already exists.'); window.location.href='../admin_panel.php';</script>";
        } else {
            $insertQuery = "INSERT INTO games (title, quantity) VALUES ('$title', '$quantity')";
    
            if (mysqli_query($conn, $insertQuery)) {
                header('Location: ../admin_panel.php');
            } else {
                echo "Error inserting a new game: " . mysqli_error($conn);
            }
        }
  
        mysqli_close($conn);
    } else {
        header('Location: ../index.php');
    }
?>
