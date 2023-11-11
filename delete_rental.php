<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $id = $_POST['id'];
    
        include('connection.php');
    
        $query = "DELETE FROM rentals WHERE id='$id'";
    
        if (mysqli_query($conn, $query)) {
            header('Location: admin_panel.php');
        } else {
            echo "Error removing a rental record: " . mysqli_error($conn);
        }
  
        mysqli_close($conn);
    } else {
        header('Location: index.php');
    }
?>
