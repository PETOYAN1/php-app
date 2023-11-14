<?php

// Super Global Const Variables

define('MAX_NUMBER_COUNT', 10);
define('MAX_NUMBER', 100);

// Generate Numbers

$numbers = [];

for($i = 0; $i < MAX_NUMBER_COUNT; $i++) {
    $numbers[] = rand(0, MAX_NUMBER);
}

?>
