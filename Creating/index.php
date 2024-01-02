<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/add_Update.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Home Page</title>
</head>
<body>
    <nav style="background-color: #e53b72;" class="navbar navbar-danger justify-content-center fs-3 mb-5 text-white"><a class="text-decoration-none text-white" href="../index.php">PHP CRUD Application</a></nav>
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-Dark">Add New User</h1>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container">
                <?php 
                    if(isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        echo '<div class="alert alert-success alert-dismissible fade show" 
                        role="alert">
                         '. $msg .'
                      </div>';
                    } 
                ?>
            <a class="btn btn-danger mb-5" href="add_new.php">Create</a>

            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Change</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('../db_conn.php');

                        $sql = "SELECT * FROM `crud`"; 
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                 <tr>
                                 <td><a href="userId.php?id=<?php echo $row['ID'] ?>"><? echo $row['ID'] ?></a></td>
                                 <td><? echo $row['name']?></td>
                                 <td><? echo $row['surname']?></td>
                                 <td><? echo $row['email']?></td>
                                 <td><? echo $row['gender']?></td>
                                 <td>
                                     <a href="edit.php?id=<?php echo $row['ID'] ?>" class="btn btn-primary">Update</a>
                                     <a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                                
                              <?php
                        }
                        ?>
                    </tr>
                </tbody>
                </table>
        </div>
    </body>
</html>
