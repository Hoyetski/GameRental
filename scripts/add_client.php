<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        include('../includes/connection.php');

        $check_query = "SELECT * FROM clients WHERE email = '$email'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('This email is already in use.'); window.location.href='../admin_panel.php';</script>";
        } else {
            $insert_query = "INSERT INTO clients (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
            
            if (mysqli_query($conn, $insert_query)) {
                header('Location: ../admin_panel.php');
            } else {
                echo "Error inserting a new client: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    } else {
        header('Location: ../index.php');
    }
?>
