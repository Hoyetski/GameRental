<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        include('../includes/connection.php');
    
        $query = "INSERT INTO clients (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    
        if (mysqli_query($conn, $query)) {
            header('Location: ../admin_panel.php');
        } else {
            echo "Error inserting a new client: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    } else {
        header('Location: ../index.php');
    }
?>
