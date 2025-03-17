<?php

function checking_palindrom($str) {
    $rts = strrev($str);
    if ($rts == $str){
        return 'Это палиндром';
    }
    else {
        return 'Это не палиндром';
    }
}

$i = checking_palindrom('lol');
print($i);