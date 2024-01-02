<?php

    $createDb = file_get_contents('createdb.sql');

    $server = '127.0.0.1:3306';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($server,$username,$password);

    if(!$conn) {
        die('Error DB ' . mysqli_connect_error());
    } else {
        mysqli_multi_query($conn, $createDb);
        header('location: index.php');
    }

?>