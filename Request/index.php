<?php
    include 'randomNumbers.php';
    $arrayNumbers = json_encode($numbers);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1em;
            width: 50%;
        }
        .sortBox {
            display: flex;
            gap: 1em;
        }
        form {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
    </style>
<div class="container">
        <h1><a style="text-decoration: none;" href="index.php">Generate Random numbers</a></h1>
        <div class="sortBox">
            <?php
                if(isset($_GET['numbers'])){
                    $numbers = json_decode($_GET['numbers']);
                }
                    foreach ($numbers as $value):
                ?>
                    <p><?= $value?></p>
                <?php
                endforeach;
            ?>
        </div>
        <form action="handle.php" method="post" id="prevent">
            <?php
            if(isset($_GET['numbers'])){
                $numbers = json_decode($_GET['numbers']);
            }
            foreach ($numbers as $index => $value):
                ?>
                <input type="hidden" name="numbers[]" value="<?= $value?>">
            <?php
            endforeach;
            ?>
            <input class="btn btn-primary" type="submit" value="Up" name="action">
            <input class="btn btn-primary" type="submit" value="Down" name="action">
        </form>
    </div>
</body>
</html>
