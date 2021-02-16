<?php
/*
We need a function that can transform a number into a string.

What ways of achieving this do you know?
Examples:

numberToString(123); // returns '123';`
numberToString(999); // returns '999';`
*/

function no_space(string $string): string
{
    return str_replace(' ', '', $string);
}
