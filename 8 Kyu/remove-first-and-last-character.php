<?php
/**
 * It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string.
 * You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
 */
function removeChar(string $string)
{
    $removeFirst = substr($string, 1);
    $finalString = substr($removeFirst, 0, strlen($removeFirst)-1);
    return $finalString;
}

/**
 * Alternate solution
 */

function altremoveChar(string $string)
{
    return substr($string, 1, -1);
}
