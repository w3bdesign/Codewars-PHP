<?php
/*
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example:

persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number
*/

function persistence(int $num): int {
  $total = 1;
  $numArray = str_split((string)$num);
  $count = 0;
  
if (count($numArray) > 1) {
    for ($i = 0; $i < count($numArray); $i++) {
        $total *= $numArray[$i];      
    }
    $count++;
    if (strlen($total) > 1) {
        return $count + persistence($total);
    } else {
        return $count;
    }
} else {
    return $count;
}

?>
