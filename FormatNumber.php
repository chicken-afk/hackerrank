<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message

function reformatNumber($number): string
{
    $i = 0;
    $result = "";
    
    while($i + 3 <= strlen($number) && strlen($number) - $i > 4 ) {
        $result = $result.substr($number,$i,3)."-";
        // $result += "-";
        $i += 3;
    }
    if(strlen($number) - $i == 4) {
        $result = $result.substr($number,$i,2)."-".substr($number, $i+2);
    }else if(strlen($number) - $i == 2) {
        $result = $result.substr($number,$i,2);
    }else if(strlen($number) - $i == 1) {
        $result = $result.substr($number,$i,1);
    }else if(strlen($number) - $i == 3) {
        $result = $result.substr($number,$i,3);
    }

    return $result;
}

function removeDashSpace($input): string
{
    $input = str_replace(" ","","$input");
    $input = str_replace("-","","$input");
    return $input;
}

function run(): void
{
    echo "Input Nomer HP: ";
    $nomer = trim(fgets(STDIN));
    echo "Nomer yang diinput $nomer\n";

    $newNumber = removeDashSpace($nomer);
    $output = reformatNumber($newNumber);
    
    echo "Hasil Reformat : $output\n";
    
    
    echo "Mulai lagi ? y/n : ";
    $start = trim(fgets(STDIN));
    if($start == 'y') {
        run();
    }else{
        echo "Program selesai";
    }
}

run();

?>