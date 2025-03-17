<?php

function letter_counter($array) {
    $str = implode($array);
    $counter =0;

    $finish = false;

    while( $finish != true ) {
        if ( $str[$counter] == "]") {
            $finish = true;
        }
        else {
            $counter++;
        }
        
    }
    return $counter-1;
}

// Обязательно вся строка заключается в квадратные скобки
$i = letter_counter(['[','lol',']']);
print($i);