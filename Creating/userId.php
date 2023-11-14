<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/userId.css">
    <title>User ID Page</title>
</head>
<body>
    <?
        include('../db_conn.php'); 
        $id = $_GET['id'];
        $sql = "SELECT * FROM `crud` WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
    ?>  
    <a class="back btn btn-dark m-3" href="index.php">Back</a>
    <div class="container d-flex justify-content-center align-items-center">
        <h1 class="text-center">Info about User ID <? echo $row['id'] ?></h1>
        <div>
            <p>Name: <? echo  $row['firstname']?></p>
            <p>Lastname: <? echo  $row['lastname']?></p>
            <p>Email: <? echo  $row['email']?></p>
            <p>Gender: <? echo  $row['gender']?></p>
        </div>
    </div>
</body>
</html>