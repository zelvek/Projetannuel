<?php


$x=1000;
$start = 2;

while ($x >0) {
  $isPrime = true;
for ($cpt=2; $cpt <= sqrt($start) ; $cpt++) {
  if ($start % $cpt == 0 ) {
    $isPrime = false;
    break;
  }
}
  if ($isPrime) {
    $x--;
    echo $start."<br>";
  }
  $start++;

}
?>
