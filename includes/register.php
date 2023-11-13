<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: ./admin_panel.php');
    } else {
        $email = $_POST['email'];
        $plain_password = $_POST['password'];

        include('connection.php');

        $check_query = "SELECT * FROM admins WHERE email='$email'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('This email is already registered.'); window.location.href='./index.php';</script>";
        } else {
            $hashed_password = password_hash($plain_password, PASSWORD_ARGON2I);

            $query = "INSERT INTO admins (email, password) VALUES ('$email', '$hashed_password')";

            if (mysqli_query($conn, $query)) {
                header('Location: ./index.php');
            } else {
                echo "Error inserting a new admin: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    }
?>
