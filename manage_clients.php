<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        if (isset($_POST['remove'])) {
            $id = $_POST['id'];
    
            include('connection.php');
        
            $query = "DELETE FROM clients WHERE id='$id'";
        
            mysqli_query($conn, $query);
      
            mysqli_close($conn);
            header('Location: admin_panel.php');
        } else if (isset($_POST['change'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
    
            include('connection.php');
        
            $query = "UPDATE clients SET email='$email', first_name='$first_name', last_name='$last_name' WHERE id='$id'";
        
            mysqli_query($conn, $query);
      
            mysqli_close($conn);
            header('Location: admin_panel.php');
        }
    } else {
        header('Location: index.php');
    }
?>
