<?php 
    $file = '../data/data.json';
    if(file_exists($file)) {
        unlink($file);
    }
    if(file_exists('../data')) {
        rmdir('../data');
    }
    header('Location: http://samvel.loc/Session/RegisterOrLogin/SignIn.php');
?>