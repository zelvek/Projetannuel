<?php

function helloWorld(){
  echo "hello world";

}

function helloYou($surname="marc"){
//marc valeur pas défault

echo "hello".$surname;


}
function isPrime($number){
$ispPrime = true;

for ($i=2; $i <= sqrt($number) ; $i++) {
  if ($number% $i == 0) {
    $isPrime = false;
    break;
  }
}


}



function showArray($array){
echo "<pre>";
print_r($array);
echo "</pre>";


}
