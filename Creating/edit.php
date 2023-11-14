<?php 
    include('../db_conn.php');
    $id = $_GET['id'];
    if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name']; 
        $last_name = $_POST['last_name']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        $password = $_POST['password'];

        $sql = "UPDATE `crud` SET `firstname`='$first_name',`lastname`='$last_name',`email`=
        '$email',`gender`='$gender', `password` = '$password' WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: index.php?msg=New record updated successfully");
        } else {
            echo 'Failed ' . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/add_Update.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-danger justify-content-center fs-3 mb-5 text-white"><a class="text-decoration-none text-white" href="index.php">PHP CRUD Application</a></nav>
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-Dark">Edit User</h1>
            <p class="text-muted">Update user Information</p>
        </div>

        <? 
            $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input value="<?echo $row['firstname'] ?>" type="text" class="form-control" name="first_name" placeholder="Samvel">
                    </div>
                </div>
                    <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input value="<?echo $row['lastname'] ?>" type="text" class="form-control" name="last_name" placeholder="Petoyan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">E-mail</label>
                        <input value="<?echo $row['email'] ?>" type="email" class="form-control" name="email" placeholder="samvelpetoyan11@gmail.com">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Password</label>
                        <input value="<?= $row['password'] ?>" type="password" class="form-control" name="password" placeholder="...">
                    </div>
                </div>
                <div class="form-group mb-3 d-flex gap-2">
                    <label>Gender:</label>
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" <? echo $row['gender'] == 'male' ? 'checked' : '' ?>>
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female"  <? echo $row['gender'] == 'female' ? 'checked' : '' ?>>
                    <label for="female" class="form-input-label">Female</label>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-success" type="submit" name="submit">Update</button>
                    <a class="btn btn-danger" href="index.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>