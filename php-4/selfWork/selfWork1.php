<?php

function maxArray($array) {
    rsort( $array );
    return $array[0];
}

$i =  maxArray([12,56,98]);
print($i);