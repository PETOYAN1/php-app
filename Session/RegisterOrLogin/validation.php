<?php 
    session_start();

    $Errors = [];

    if(isset($_POST['submit'])) {
        if(!$_POST['first_name']) {
            $Errors['FirstName'] = 'First name is Required';
        }
        if(!$_POST['last_name']) {
            $Errors['LastName'] = 'Last name is Required';
        }
        if(!$_POST['company']) {
            $Errors['Company'] = 'Company is Required';
        }
        if(!$_POST['email']) {
            $Errors['Email'] = 'Email is Required';
        } 
        if(!$_POST['phone_number']) {
            $Errors['Phone'] = 'Phone number is Required';
        } 
        if(!$_POST['password']) {
            $Errors['Password'] = 'Password is Required';
        } 
        if(!$_POST['passRepeat']) {
            $Errors['PassRepeat'] = 'Write repeat password';
        }
        if($_POST['passRepeat'] !== $_POST['password']) {
            $Errors['passMatch'] = 'Passwords do not match'; 
        }
        if($_FILES['file']['error'] == 0) {
            $file_name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location = 'files/';
            move_uploaded_file($tmp_name, "$location/$file_name");
        } else {
            $Errors['File'] = 'File not found';
        }

        // If Not Error locate Home page

        $name = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);
        $photo = $_FILES['file']['full_path'];

        $params = "?first_name=$name&last_name=$lname&company=$company&email=$email&phone_number=
        $phone&photo=$photo&gender=$gender&password=$password";
        $params = str_replace(PHP_EOL, '', $params);

        if(!$Errors) {
            header("Location: ../index.php . $params");
        } 
    }
?>