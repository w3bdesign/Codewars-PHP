/*
It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. 
You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
*/

function remove_char(string $s): string {
$removeFirst = substr($s, 1);
$finalString = substr($removeFirst, 0, strlen($removeFirst)-1);
return $finalString;
}

// Alternate solution:

function remove_char(string $s): string {
  return substr($s, 1, -1);
}