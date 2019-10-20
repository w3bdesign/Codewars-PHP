  function descendingOrder(int $n): int {

  $arrayNumber = str_split($n);
  arsort($arrayNumber);
  return (int) implode($arrayNumber);


  }