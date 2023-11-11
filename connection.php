<?php
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'game_rental';

    $conn = mysqli_connect($host_name, $user_name, $password, $database);

    try {
        $conn = mysqli_connect($host_name, $user_name, $password, $database);
    } catch (\Throwable $th) {
        echo 'Error while connecting to database.';
    }
?>