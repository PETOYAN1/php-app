<?php 
    include('db_conn.php');

        if(isset($_POST['submit'])) {
            $email = $_POST['email']; 
            $password = $_POST['password'];

            if(empty($email)) {
                echo "<script>alert('Write Email');</script>";
            }   else if(empty($password)){
                echo "<script>alert('Write password');</script>";
            } else {
                $sql = "SELECT * FROM crud WHERE email = '$email' AND password = '$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $count = mysqli_num_rows($result);
                if($count==1) {
                    header("Location: Creating/index.php");
                } else {
                    echo "<script>
                            alert('Wrong Email or Password');
                        </script>";
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
    <link rel="stylesheet" href="css/signIn.css">
</head>
<body>
    <div class="animated bounceInDown">
        <div class="container">
            <span class="error animated tada" id="msg"></span>
            <form method="post" name="form1" class="box">
            <h4><a href="Creating/index.php" style="text-decoration: none;">Admin</a><span style="cursor : pointer"><a style="text-decoration: none; color: white;" href="Creating/index.php">Dashboard</a></span></h4>
            <h5>Sign in to your account.</h5>
                <input type="text" name="email" placeholder="Email" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
                <a href="signUp.php" class="forgetpass">Forget Password?</a>
                <input type="submit" value="Sign in" class="btn1" name="submit">
            </form>
                <a href="signUp.php" class="dnthave">Don’t have an account? Sign up</a>
        </div> 
    </div>
</body>
</html>