<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        if (isset($_POST['remove'])) {
            $id = $_POST['id'];
    
            include('../includes/connection.php');
            
            $check_rentals_query = "SELECT * FROM rentals WHERE client_id='$id'";
            $result = mysqli_query($conn, $check_rentals_query);
            
            if (mysqli_num_rows($result) > 0) {
                mysqli_close($conn);
                echo "<script>alert('Delete client\'s rentals first!'); window.location.href='../admin_panel.php';</script>";
            } else {
                $delete_query = "DELETE FROM clients WHERE id='$id'";
                mysqli_query($conn, $delete_query);
                mysqli_close($conn);
                header('Location: ../admin_panel.php');
            }
        } else if (isset($_POST['change'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
    
            include('../includes/connection.php');
        
            $query = "UPDATE clients SET email='$email', first_name='$first_name', last_name='$last_name' WHERE id='$id'";
        
            mysqli_query($conn, $query);
      
            mysqli_close($conn);
            header('Location: ../admin_panel.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>
