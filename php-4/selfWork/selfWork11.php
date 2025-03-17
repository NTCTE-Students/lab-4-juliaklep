<?php

function get_factorial($int) {

    $fact = 1;

    for ($i = 0; $i < $int; $i++) {
        $fact *= $int-$i;
    }
    return $fact;
}

$i = get_factorial(0);
print($i);
