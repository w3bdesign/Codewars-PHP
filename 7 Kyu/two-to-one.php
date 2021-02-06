<?php
/*
Take 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, containing distinct letters,

    each taken only once - coming from s1 or s2.

Examples:

a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
*/

function longest($a, $b)
{
    $combinedString = $a . $b;
    $arrayString = str_split($combinedString);
    $uniqueString = array_unique($arrayString);
    sort($uniqueString);
    return implode($uniqueString);      
}

// Alternate solution

function longest($a, $b)
{
    $chars = array_unique(str_split($a . $b));
    sort($chars);
    return implode('', $chars);
}

?>