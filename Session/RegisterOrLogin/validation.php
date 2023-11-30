<?php 
    session_start();
    session_unset();
    session_destroy();
    $Errors = [];
    $id = 0;

    //Generate Id for Users

    if(isset($_POST['submit'])) {
        $id += 1;
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

        $name = htmlspecialchars($_POST['first_name']);
        $lname = htmlspecialchars($_POST['last_name']);
        $company = htmlspecialchars($_POST['company']);
        $email = htmlspecialchars($_POST['email']);
        $phone = $_POST['phone_number'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);
        $photo = $_FILES['file']['full_path'];

        if(!$Errors) {

            //Put data in storage

            $storage['id'] = $id;
            $storage['name'] = $name;
            $storage['lastname'] = $lname;
            $storage['company'] = $company;
            $storage['email'] = $email;
            $storage['phone'] = $phone;
            $storage['gender'] = $gender;
            $storage['password'] = $password;
            $storage['image'] = $photo;

            // Create new file 

            if(!file_exists('data')) {
                mkdir('data');
            }
            $fp = fopen('data/data.json', 'a');

            if(!file_exists('data/data.json')) {
                echo 'File Not Found';
                exit();
            } 
            if(filesize('data/data.json') == 0) {
                $first_record[] = $storage;
                fwrite($fp, json_encode($first_record, JSON_PRETTY_PRINT, LOCK_EX));
            } 
            fclose($fp);

            // If Not Error locate Home page

            header("Location: ../index.php");
        } 
    }
?>