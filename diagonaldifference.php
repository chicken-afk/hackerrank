<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $lefttoright = 0;
    $righttoleft = 0;
    $lastIndex = count($arr) - 1;
    for($i = 0 ; $i < count($arr) ; $i++) {
        $j = $lastIndex - $i;
        $lefttoright += $arr[$i][$i];
        $righttoleft += $arr[$i][$j];
    }    
    $output = abs($lefttoright - $righttoleft);
    return $output;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
