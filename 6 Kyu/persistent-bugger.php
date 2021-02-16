<?php
/*
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example:

persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number
*/

/**
 * persistence
 *
 * @param  int $num
 * @return int
 */
function persistence(int $num): int
{
    // Ensure that $num is an integer
    $num = (int)$num;
    $total = 1;
    
    $numArray = str_split($num);
    // Additional type check
    if (true===$numArray) {
        return 0;
    }
    $numArrayCount = count($numArray);
    $count = 0;
  
    if ($numArrayCount > 1) {
        for ($i = 0; $i < $numArrayCount; $i++) {
            $total *= $numArray[$i];
        }
        $count++;
        if (strlen($total) > 1) {
            return $count + persistence($total);
        }
        return $count;
    }
    return $count;
}

// Alternate solution - array_product multiplies all values in the array, so we wont need to use a loop

/**
 * altPersistence
 *
 * @param  mixed $num
 * @return int
 */
function altPersistence(int $num): int
{
    // Ensure that $num is an integer
    $num = (int)$num;
    $splitNum = str_split($num);
    if (true===$splitNum) {
        return 0;
    }
    $count = 0;
    while ($num > 9) {
        $num = array_product($splitNum);
        $count++;
    }
  
    return $count;
}
