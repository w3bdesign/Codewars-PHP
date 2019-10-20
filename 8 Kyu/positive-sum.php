/*
You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0.
*/

function positive_sum($arr) {
   
  foreach ($arr as $value)
  {
  if($value > 0) { $sum += $value; }
  
  }
 return $sum; 
  
}