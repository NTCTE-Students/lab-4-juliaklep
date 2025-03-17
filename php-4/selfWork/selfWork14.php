<?php

function rev_data($data) {

    $newdata = "";

    $day = "";
    $month = "";
    $year = "";

    for($i = 0;$i <2; $i++){
        $day = $day . $data[$i];
    }
    for($i = 3;$i < 5;$i++){
        $month .= $data[$i];
    }
    for($i = 6;$i < strlen($data);$i++){
        $year .= $data[$i];
    }
    
    $newdata .=$day ."/". $month ."/". $year;
    

    return $newdata;
    
}

$i = rev_data("12-11-2006");
print($i);