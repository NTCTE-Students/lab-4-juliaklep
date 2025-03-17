<?php

function check_prime_number($int) {

    $prime_number = false;

    for ($i = 2; $i < 9; $i++) {
        if($int%$i ==0 && $int!=$i) {
            $prime_number = true;
        }

    }
    if ($prime_number == true) {
        return 'Это простое число';
    }
    else {
        return 'Это не простое число';
    }
}

$i = check_prime_number(5);
print($i);
