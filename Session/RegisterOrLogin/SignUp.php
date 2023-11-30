<?php 
    include 'validation.php';

	session_start();
    
	// if($_SESSION) {
    //     header('Location: ../index.php');
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
    <h1 class="text-center text-white">Registration Page</h1>
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="../css/images/form-img.jpg" alt="Img">
                <div class="signup-img-content">
                    <h2>Register now </h2>
                    <p>while seats are available !</p>
                </div>
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">First name</label>
                                <input value="<?= isset($_POST['first_name']) ? $_POST['first_name'] : '';?>" type="text" name="first_name" id="first_name" />
                                <span><?= isset($Errors['FirstName']) ? $Errors['FirstName'] : '' ?></span>
                            </div>
                            <div class="form-input">
                                <label for="last_name" class="required">Last name</label>
                                <input value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : '';?>" type="text" name="last_name" id="last_name" />
                                <span><?=isset($Errors['LastName']) ? $Errors['LastName'] : '' ?></span>
                            </div>
                            <div class="form-input">
                                <label for="company" class="required">Company</label>
                                <input value="<?= isset($_POST['company']) ? $_POST['company'] : '';?>" type="text" name="company" id="company" />
                                <span><?= isset($Errors['Company']) ? $Errors['Company'] : '' ?></span>
                            </div>
                            <div class="form-input">
                                <label for="email" class="required">Email</label>
                                <input value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" type="email" name="email" id="email" />
                                <span><?= isset($Errors['Email']) ? $Errors['Email'] : ''  ?></span>
                            </div>
                            <div class="form-input">
                                <label for="phone_number" class="required">Phone number</label>
                                <input type="number" value="<?= isset($_POST['phone_number']) ? $_POST['phone_number'] : '0';?>" name="phone_number" id="phone_number" />
                                <span><?= isset($Errors['Phone']) ? $Errors['Phone'] : ''  ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-select">
                            <label for="file" class="required">Choose File</label>
                                <div class="select-list">
                                    <input name="file" type="file" id="file" multiple>
                                    <span><?= isset($Errors['File']) ? $Errors['File'] : '' ?></span>
                                </div>
                            </div>
                            <div class="form-radio">
                                <div class="label-flex">
                                    <label for="male">Gender</label>
                                </div>
                                <div class="form-radio-group">            
                                    <div class="form-radio-item">
                                        <input value="male" type="radio" name="gender" id="male" checked>
                                        <label for="male">Male</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input value="female" type="radio" name="gender" id="female">
                                        <label for="female">Female</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="password" class="required">Password</label>
                                <input type="password" name="password" id="password"/>
                                <span><?= isset($Errors['Password']) ? $Errors['Password'] : ''  ?></span>
                                <span><?= isset($Errors['passMatch']) ? $Errors['passMatch'] : ''  ?></span>
                            </div>
                            <div class="form-input">
                                <label for="passRepeat" class="required">Repeat Password</label>
                                <input type="password" name="passRepeat" id="passRepeat" />
                                <span><?= isset($Errors['PassRepeat']) ? $Errors['PassRepeat'] : ''  ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        <a href="signIn.php" value="Reset" class="submit btn btn-success" id="reset" name="reset" >I have Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>
        ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 2500,
                delay: 0,
                opacity: 0
            })
            ScrollReveal().reveal('.submit', { origin : 'left'});
            ScrollReveal().reveal('.signup-img', { origin : 'left'});
            ScrollReveal().reveal('.signup-content', {origin : 'left'});
            ScrollReveal().reveal('.container-login100-form-btn', {origin : 'bottom'});
    </script>
</body>
</html>