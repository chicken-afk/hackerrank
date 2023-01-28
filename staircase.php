<?php


/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    // Write your code here
    $i = 1;
    while ($i <= $n) {
        $j = $n;
        for ($j; $j >= 1; $j--) {
            if($j <= $i) {
                echo "#";
            }else{
                echo " ";
            }
        }
        echo "\n";
        $i = $i + 1;
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
