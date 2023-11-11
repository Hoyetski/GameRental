<?php
    session_start();
    
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header('Location: admin_panel.php');
    }
?>
<?php
    $email = $_POST['email'];
    $plain_password = $_POST['password'];

    include('connection.php');

    $query = "SELECT * FROM admins WHERE email = '$email'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        if (password_verify($plain_password, $hashed_password)) {
            session_start();
            $_SESSION["logged_in"] = true;
            header('Location: admin_panel.php');
        } else {
            echo "<script>alert('Bad credentials!');</script>";
        }
    } else {
        echo "<script>alert('Bad credentials!');</script>";
    }

    mysqli_close($conn);
?>
