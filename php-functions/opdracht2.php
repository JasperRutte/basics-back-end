<?php

function longest_string_array($words){
    $string_letter_amount = 0;
    $longest_string = "";
    foreach ($words as $word){
        if($string_letter_amount < strlen($word)){
            $string_letter_amount = strlen($word);
            $longest_string = $word;
        }
    }
    return $longest_string;
}

$words = ["a", "ab", "abc", "ad"];
echo longest_string_array($words);