<?php 
    $array = [];

    //Generate Numbers

    for ($i = 0; $i < 10; $i++) {
        $array[$i] = rand(1,30);
        for ($j = 0; $j < $i; $j++) {             
           while ($array[$j] == $array[$i]){               
              $array[$i] = rand(1,30);                         
           }           
        }    
     }    


     // Sort Numbers in Increment


     $sort = $array;

     for ($i = 0; $i < count($sort); $i++) {
        for ($j = 0; $j < (count($sort) - 1 - $i); $j++) { 
            if($sort[$j] > $sort[$j + 1]) {
                $temp = $sort[$j];
                $sort[$j] = $sort[$j + 1];
                $sort[$j+1] = $temp;
            }
        }
     }

     //Sort Numbers in Decrement

     $sort_dec = $array;

     for ($i = 0; $i < count($sort_dec); $i++) {
        for ($j = 0; $j < (count($sort_dec) - 1 - $i); $j++) { 
            if($sort_dec[$j] < $sort_dec[$j + 1]) {
                $temp = $sort_dec[$j];
                $sort_dec[$j] = $sort_dec[$j + 1];
                $sort_dec[$j+1] = $temp;
            }
        }
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/random.scss">
</head>
<body>
    <a class="btn btn-danger m-3" href="../Creating/index.php">Come Back</a>
    <h1 class="mb-4">Random numbers</h1>
    <div>
        <?php for($i = 0; $i < 10; $i++) :?>
             <p><?= $array[$i] ?></p>
        <?php endfor?>
    </div>
    <!-- <h1 class="mb-4">Sorting numbers in Increment</h1>
    <div>
        <?php for($i = 0; $i < 10; $i++) :?>
             <p><?= $sort[$i] ?></p>
        <?php endfor?>
    </div>
    <h1 class="mb-4">Sorting numbers in Decrement</h1>
    <div>
    <?php for($i = 0; $i < 10; $i++) :?>
             <p><?= $sort_dec[$i] ?></p>
        <?php endfor?>
    </div> -->
</body>
</html>