<?php
/*
Write a function called repeatString which repeats the given String src exactly count times.

repeatStr(6, "I") // "IIIIII"
repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"
*/

function repeatStr($number, $str)
{
    return str_repeat($str, $number);
}
?>
