<?php

function sumIn($int) {
    $str = strval($int);

    $counter = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        $counter +=$str[$i];
    }
    return $counter;
}

$i = sumIn(1234);
print($i);