<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        if (isset($_POST['remove'])) {
            $id = $_POST['id'];
    
            include('connection.php');
        
            $query = "DELETE FROM games WHERE id='$id'";
        
            mysqli_query($conn, $query);
      
            mysqli_close($conn);
            header('Location: admin_panel.php');
        } else if (isset($_POST['change'])) {
            $id = $_POST['id'];
            $quantity = $_POST['quantity'];
    
            include('connection.php');
        
            $query = "UPDATE games SET quantity='$quantity' WHERE id='$id'";
        
            mysqli_query($conn, $query);
      
            mysqli_close($conn);
            header('Location: admin_panel.php');
        }
    } else {
        header('Location: index.php');
    }
?>
