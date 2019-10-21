<?php
/*
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, and u as vowels for this Kata.

The input string will only consist of lower case letters and/or spaces.
*/

function getCount($str)
{
    // Use regex to get the count 
    return preg_match_all('/[aeiou]/i', $str, $matches);
}
?>
