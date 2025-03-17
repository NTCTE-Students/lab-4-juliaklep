<?php

function translater($int){
    $int *= 9/5;
    $int +=32;
    return $int;
}

$i = translater(34);
print($i);