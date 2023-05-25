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

function longest_string_array($array){
    $string_letter_amount = 0;
    $longest_string = "";
    foreach ($array as $word){
        echo "<br>",  strlen($word);
        if($string_letter_amount <=   strlen($word)){
            $longest_string = $word;
        }
    }
    echo $longest_string;
}
$words = ["a", "ab", "abc", "ad"];

longest_string_array($words);