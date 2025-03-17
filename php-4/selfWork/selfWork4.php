<?php

function frm_min_to_max($arr) {
    sort($arr);
    return $arr;
}

$i = frm_min_to_max([1,4,6,7,3,9]);
foreach($i as $g) {
    print($g . ", ");
}