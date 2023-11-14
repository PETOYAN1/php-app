<?php 

if($_POST){
    list($numbers, $action) = array_values($_POST);

    if($action == 'Up') {

         // Sort numbers in Increment

         for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < (count($numbers) - 1 - $i); $j++) { 
                if($numbers[$j] > $numbers[$j + 1]) {
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j+1] = $temp;
                }
            }
         }
         $params="?numbers=".json_encode($numbers)."&action=$action";
    } else {

        // Sort numbers in Decrement

        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < (count($numbers) - 1 - $i); $j++) { 
                if($numbers[$j] < $numbers[$j + 1]) {
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j+1] = $temp;
                }
            }
         }
         $params="?numbers=".json_encode($numbers)."&action=$action";
    }
    header('location:http://samvel.loc/Request/index.php'. $params);
}
?>