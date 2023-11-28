<?php 
    require('db_conn.php');
    if(isset($_POST['submit'])) {
        $first_name = $_POST['name'];
        $last_name = $_POST['LastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
            echo "<script>
                    alert('Something is empty');
                 </script>";
        } else {
            $sql = "INSERT INTO `crud`(`id`, `firstname`, `lastname`, `email`, `gender`, `password`)
            VALUES (NULL,'$first_name','$last_name','$email','$gender','$password')";

            $result = mysqli_query($conn, $sql);

            if($result) {
                header("Location: Creating/index.php");
            } else {
                echo 'Failed ' . mysqli_error($conn);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signUp.css">
    <style>
        .dontHave {
            position: absolute;
            left: 28%;
            top: 92%;
        }
    </style>
</head>
<body>
    <div class="animated bounceInDown">
        <div class="container">
            <span class="error animated tada" id="msg"></span>
            <form method="post" name="form1" class="box">
            <h4>Admin<span style="cursor : pointer;color: white; ">Dashboard</span></h4>
            <h5>Sign Up to your account.</h5>
                <input type="text" name="name" placeholder="FirstName" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="text" name="LastName" placeholder="LastName" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="text" name="email" placeholder="Email" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="password" placeholder="Password" id="pwd" autocomplete="off">
                <div class="form-group mb-3 d-flex gap-2">
                    <label>Gender:</label>
                    <input type="radio" checked class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="male">
                    <label for="female" class="form-input-label">Female</label>
                </div>
                <input type="submit" value="Sign Up" class="btn1" name="submit">
            </form>
            <a href="index.php" class="dontHave">Sign In if you have Account ?</a>
        </div> 
    </div>
    <script>
        let password = document.getElementById('password');

        
    </script>
</body>
</html>