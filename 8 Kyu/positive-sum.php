function positive_sum($arr) {
   
  foreach ($arr as $value)
  {
  if($value > 0) { $sum += $value; }
  
  }
 return $sum; 
  
}