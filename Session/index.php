<?php
    session_start();

    if(isset($_GET)) {
        foreach($_GET as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }
    $row = $_SESSION;

    if(!$_SESSION) {
        header('Location: ./RegisterOrLogin/SignIn.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formSession.css">
    <title>Home Page</title>
</head>
<body>
<!-- <a class="btn btn-danger mb-5" href="add_new.php">Create</a> -->
<a class="btn btn-success" href="RegisterOrLogin/DeleteUpdate/delete.php">Log Out</a>
<div class="main">
    <h1 class="text-center m-5"> <?= isset($row['first_name'])  ? 'User ' . $row['first_name'] : '' ?></h1>
    <img src="RegisterOrLogin/files/<?= $row['photo'] ?>" alt="photo">
</div>
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Company</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Photo</th>
        <th scope="col">Gender</th>
        <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
            <tr>
            <?php if(isset($row)) foreach($row as $key => $value):?>
            <td><?= $value ?></td>
            <?php endforeach ?>
        <?php
        ?>
        </tr>
    </tbody>
    </table>
</body>
</html>