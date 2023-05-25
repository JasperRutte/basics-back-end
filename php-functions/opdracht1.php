<?php
function lijst_optellen($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if (is_int($number / 2)){
            $sum += $number;
        }
    }
    return $sum;
}

$number_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo lijst_optellen($number_list);