<?php
$myarray = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);

$cycle = count($myarray) - 1;

$op = 0;
$spec = $cycle;
$replace = 0;

for ($s = 0; $s < $cycle + 1; $s++) {
  echo $myarray[$s] . ' ';
}
echo '<br>';
echo '<br>';

for ($c1 = 0; $c1 < $cycle; $c1++) {
  
  $x = 0;
  $y = 1;
  for ($c2 = 0; $c2 < $cycle; $c2++) {
    
    
    if ($myarray[$x] > $myarray[$y]) {
      $hold = $myarray[$x];
      $myarray[$x] = $myarray[$y];
      $myarray[$y] = $hold;
      $replace++;
    }
    $op++;
    $x++;
    $y++;
    
    for ($s = 0; $s < $cycle + 1; $s++) {
      echo $myarray[$s] . ' ';
    }
    echo '<br>';
  }
}

echo '<br>';

for ($s = 0; $s < $cycle + 1; $s++) {
  echo $myarray[$s] . ' ';
}
echo '<br>';
echo '<br>';
echo 'count of compare operations: ' . $op . '<br>';
echo 'count of replace operations: ' . $replace;

?>
