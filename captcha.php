<?php
session_start();
header("Content-type: image/png");
    $image =  imagecreate(200, 60);
    $back = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));
    $color = imagecolorallocate($image, rand(125,255), rand(125,255), rand(125,255));
      $color2 = imagecolorallocate($image, rand(90,200), rand(90,200), rand(90,200));

//créer une chaine alphanumérique aléatoire d'une longueur aléatoire entre 4 et 6
$charauthorized = "azertyuiopqsdfghjklmwxcvbn0123456789";

//mélanger la chaine de caractere

$charauthorized = str_shuffle($charauthorized);

//couper la chaine de zero a cette valeur aléatoire

$lenght = rand(4,6);
$charauthorized = substr($charauthorized,0,$lenght);


//echo $charauthorized;


$a = rand(1,10);
while ($a <= rand(2,20)) {
  ImageLine ($image, rand(50,150), rand(10,50), rand(50,150), rand(10,50), $color);
  $a++;
}
while ($a <= rand(2,10)) {
  ImageEllipse($image, rand(50,150), rand(10,50), rand(50,150), rand(10,50), $color);
  $a++;
}
while ($a <= rand(2,20)) {
  imagerectangle($image, rand(50,150), rand(10,50), rand(50,150), rand(10,50), $color);
  $a++;
}



$listOfFont = glob("fonts/*.ttf");
shuffle($listOfFont);
$font = $listOfFont[0];

$_SESSION["captcha"] = $charauthorized;

imagettftext($image, rand(20,25), rand(-20,20), rand(50,100), rand(30,45), $color, $font, $charauthorized);




imagepng($image);
