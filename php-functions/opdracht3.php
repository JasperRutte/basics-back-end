<?php
$arr = ['2','4','8','5','1','7','6','9','10','3'];


function sort_array(array $num_array)
{
    $sorted_array = [];
    foreach ($num_array as $number){
        $smallest_number = min($num_array);
        $sorted_array[] = $smallest_number;
        $remove_num = array_search($smallest_number, $num_array);
        unset($num_array[$remove_num]);
    }
    foreach ($sorted_array as $numb){
        echo $numb, "<br>";
    }
}



//function sort_array(array $num_array)
//{

//}

sort_array($arr);