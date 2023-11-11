<?php
    session_start();
    
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: admin_panel.php');
    } else {
        $email = $_POST['email'];
        $plain_password = $_POST['password'];
    
        include('connection.php');
    
        $hashed_password = password_hash($plain_password, PASSWORD_ARGON2I);
    
        $query = "INSERT INTO admins (email, password) VALUES ('$email', '$hashed_password')";
    
        if (mysqli_query($conn, $query)) {
            header('Location: admin_panel.php');
        } else {
            echo "Error inserting a new admin: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>
