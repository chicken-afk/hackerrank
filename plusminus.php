<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $plus = 0;
    $minus = 0;
    $zero = 0;
    $output = [];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i] > 0) {
            $plus += 1;
        } else if($arr[$i] < 0) {
            $minus += 1;
        } else{
            $zero += 1;
        }
    }
    $output[0] = $plus / count($arr);
    $output[1] = $minus / count($arr);
    $output[2] = $zero / count($arr);
    echo $output[0]."\n".$output[1]."\n".$output[2];
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
