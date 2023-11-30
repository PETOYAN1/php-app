<?php

    $get_users = file_get_contents('RegisterOrLogin/data/data.json');
    $get_users = json_decode($get_users, JSON_OBJECT_AS_ARRAY);

    if(!$get_users) {
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
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Home Page</title>
</head>
<body>
<!-- <a class="btn btn-danger mb-5" href="add_new.php">Create</a> -->
<a class="btn btn-success" href="RegisterOrLogin/DeleteUpdate/delete.php">Log Out</a>
<div class="main">
    <h1 class="text-center m-5"> <?= isset($row['first_name'])  ? 'User ' . $row['first_name'] : '' ?></h1>
    <img src="RegisterOrLogin/files/<?= $get_users[0]['image']; ?>" alt="image">
</div>
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Company</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Gender</th>
        <th scope="col">Password</th>
        <th scope="col">Photo</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < count($get_users); $i++): ?>
            <tr>
                    <?php foreach($get_users[$i] as $key => $value): ?>
                        <td>
                            <?= $value ?>
                        </td>
                    <?php endforeach ?>
                    <?php endfor ?>
            </tr>
    </tbody>
    </table>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400,
            opacity: 0
        })
        ScrollReveal().reveal('.table', { delay: 0, origin : 'top'});
        ScrollReveal().reveal('img', { delay: 0, origin : 'top'});
        ScrollReveal().reveal('.btn', { delay: 0, origin : 'right'});
    </script>
</body>
</html>