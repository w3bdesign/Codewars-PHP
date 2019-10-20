function getMiddle($text) {

$length = strlen($text);
$middle = $length / 2;

if($length % 2 == 0)
{
$returnedText = $text[$middle-1];
$returnedText.= $text[$middle];
}
else {
$returnedText.= $text[$middle];
}
return $returnedText;

}


// Alternative method:

function getMiddle($text) {
$len = strlen($text);
if ($len % 2 === 0) {
return substr($text, $len / 2 - 1, 2);
}
return substr($text, $len / 2, 1);
}