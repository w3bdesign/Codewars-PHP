function getCount($str) {
return preg_match_all('/[aeiou]/i',$str,$matches);
}