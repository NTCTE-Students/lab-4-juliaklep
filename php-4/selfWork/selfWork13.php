<?php

function mid_math($array) {
    $Answer = 0;

    for ($i = 0; $i < count($array); $i++) {
        $Answer +=$array[$i];
    }

    return $Answer/count($array);
}

$i = mid_math([1,3,2]);
print($i);