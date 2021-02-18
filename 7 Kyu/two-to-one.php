<?php
/*
Take 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, 
containing distinct letters, each taken only once - coming from s1 or s2.

Examples:

a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
*/

function longest($stringone, $stringtwo)
{
    $combinedString = $stringone . $stringtwo;
    $stringonerrayString = str_split($combinedString);
    $stringonerrayString = (array)$stringonerrayString;
    $uniqueString = array_unique($stringonerrayString);
    sort($uniqueString);
    return implode($uniqueString);
}

// Alternate solution

function altlongest($stringone, $stringtwo)
{
    $stringToSplit = str_split($stringone . $stringtwo);
    $stringToSplit = (array)$stringToSplit;
    $chars = array_unique($stringToSplit);
    sort($chars);
    return implode('', $chars);
}
