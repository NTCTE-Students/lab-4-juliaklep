<?php

function generator_password() {
    $password = "";

    $dictionary = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','n','m','1','2','3','4','5','6','7','8','9','0'];

    $length = rand(5,10);

    for ($i = 0; $i < $length; $i++) {
        $password = ($password . $dictionary[rand(0, rand(0, count($dictionary)))]);
    }
    return $password;
}

$i = generator_password();
print($i);