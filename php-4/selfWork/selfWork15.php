<?php

function second_max_number($array){
    unset($array[array_search(max($array), $array)]);
    return max($array);
}

$i = second_max_number([1,4,6,3,5]);
print($i);