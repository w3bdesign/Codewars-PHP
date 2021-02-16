<?php
/*
Get the number n (n>0) to return the reversed sequence from n to 1.

Example : n=5 >> [5,4,3,2,1]
*/

function reverseSeq($varNumber)
{
    $number = [];
    for ($i = $varNumber; $i > 0;$i--) {
        array_push($number, $i);
    }
    return $number;
};

// Alternate solution:

function altreverseSeq($number)
{
    return range($number, 1);
}
