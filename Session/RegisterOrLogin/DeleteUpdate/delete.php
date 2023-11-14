<?php 
    session_start();

    // Delete session

    session_unset();
    header('Location: http://samvel.loc/Session/index.php');
?>