function getCount($str) {
// Use regex to get the count 
return preg_match_all('/[aeiou]/i',$str,$matches);
}
