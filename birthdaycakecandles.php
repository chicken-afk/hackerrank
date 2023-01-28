<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    // Write your code here
    rsort($candles);
    // return $candles;
    $count = 1;
    for($i=1;$i<count($candles);$i++){
        if($candles[$i] == $candles[0]) {$count++;}
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
// birthdayCakeCandles($candles);
$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
