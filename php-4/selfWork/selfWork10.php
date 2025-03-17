<?php

function del_rep($array){
    $g = array_unique($array);
    return $g;

}

$i = del_rep([174,836,19,174]);
foreach($i as $arr){
    print($arr . ", ");
}