<?php
function sort_numbers($num_array)
{
    sort($num_array);
    foreach ($num_array as $num){
        echo "<br>",$num;
    }
}

$nums = [3, 4, 1, 6, 8, 9];
sort_numbers($nums);