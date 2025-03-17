<?php

function word_counter ($str){
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == " ") {
            $counter++;
        }
    }
    return $counter+1;
}

$i = word_counter("lorem ipsum uwu ag gra");
print($i);