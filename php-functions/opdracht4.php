<?php
function biggest_divider($x, $y){
    $gcd = gmp_gcd($x, $y);
    echo gmp_strval($gcd) . "\n";
}
echo biggest_divider(10, 5);
