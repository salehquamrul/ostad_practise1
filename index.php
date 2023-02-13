<?php


// First Homework.
function isEven($n) {
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

$x = 15;

if (isEven($x)){
    echo "{$x} is an even number";
}else {
    echo "{$x} is an odd number";   
}

// Second Homework.

$sum = 0;

for($i = 1; $i <= 100; $i++){
    $sum += $i;
}

echo "The sum of the series 1+2+3...100 is: $sum";
