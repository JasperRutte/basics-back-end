<?php
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$nums = array(3, 5, 8, 12);

echo "$num1 + $num2 = ", $num1 + $num2 , "<br>";
echo "$num1 - $num2 = ", $num1 - $num2 , "<br>";
echo "$num1 * $num2 = ", $num1 * $num2 , "<br>";
echo "$num1 / $num2 = ", $num1 / $num2 , "<br>";

function table6($x, $numbers){
    foreach ($numbers as $number){
        for ($y = 1; $y <= 10; $y++){
            echo "$number * $y =", $number * $y, "<br>";
        }
    echo "<br><br>";
    }
}
table6(6, $nums);