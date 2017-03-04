<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="description" content="projet web">

      <title> test </title>
</head>


<body>
    <header>
      <nav>

      </nav>
      <h1>Bonsoir</h1>
    </header>

    <aside>

    <aside>



<?php
//commentaire sur une ligne
/* multi
ligne */
//on peut l'écrire ou l'on veut



//affiche moi quelque chose
echo "bonjour";
echo "<br>";
echo "<hr>";
echo "yves";
echo "<br>";
echo time(); // time mais depuis la création
echo "<br>";
echo date(" d m Y G:i:s"); // time day month year, heure : minute : seconde

 ?>
<hr>



    </aside>


  <section>

  </section>



<section>

<?php

echo "¤Marcellin";
echo "<br>";
echo 4+2*7;

echo "<br>";
// pour afficher des caratères il faut les anti slasher :
echo "salut c'est \"yves\" ";

/* différente variable possible : string boolean integer float NULL */
echo "<br>";
$myAge = 18.5;

echo $myAge."ans"; // pour concaténer mettre un point
// les types de variables changent toutes seulent celon ce qu'il y a à l'intérieur.
// les opérateurs : + - * / %

echo "<br>";

$number1 = 12;
$number2 = 14;

//afficher 12 + 14 = 26

echo $number1."+".$number2." est égal à".($number1+$number2);

// condition :
$age = 180;
echo "<br>";
// afficher un de ces 3 messages :
// vous êtes tout juste majeur , vous êtes majeur, vous êtes mineur
if ($age >= 19 && $age < 100) {
echo "vous êtes majeur";

}elseif ($age == 18 ) {
  echo "vous êtes tout juste majeur";
}elseif ($age < 18){
echo "vous êtes mineur";
}elseif ($age >=100) {
  echo "vous êtes vieux";
}


echo "<br>";

$number1 = 12;
$number2 = 0;
$signe = "/";
$number3 =0;
if ($signe == "-") {
$number3 = $number1 - $number2;
}elseif ($signe == "*") {
$number3 =  $number1*$number2;
}elseif ($signe == "+") {
$number3 =  $number1+$number2;
}elseif ($signe == "/" && $number2 != 0) {
$number3 =  $number1/$number2;
};


echo "le resultat de ".$number1." ".$signe."  ".$number2." = ".$number3;

echo "<br>";


//switch

switch ($signe) {
  case '-':
    $number3 = $number1 - $number2;
    break;
  case '*':
    $number3 = $number1 * $number2;
    break;
  case '+':
      $number3 = $number1 + $number2;
    break;
  case '/':
    if ($number2 != 0) {
      $number3 = $number1 / $number2;
    break;
    }

    default :
    $number3 = "non valide";

    break;
}

echo "le resultat de ".$number1." ".$signe."  ".$number2." = ".$number3;





echo "<br>";
echo "<br>";
// $cpt++ : ça s'ajoute à la ligne suivante
// ++$cpt  : s'ajoute immédiatement

 // LES BOUCLES

$chiffreAtester = 42;

$isPrime = true;

for ($i=2; $i < $chiffreAtester ; $i++) {
  if ($chiffreAtester % $i == 0)  {
    $isPrime = false;
    break;
  }
}

if ($isPrime == true ) {

  echo $chiffreAtester." est un nombre premier";
}else {
  echo $chiffreAtester." n'est pas un nombre premier";
}






echo "<br>";
// LA BOUCLE WHILE
/*
$cpt = 0;

while (++$cpt <10) {
  echo $cpt;

}
*/
echo "<br>";




//condition ternaire

// instruction ( condition) ? retour si vrai: retour si faux ;


echo ($isPrime == true)? $chiffreAtester." est un nombre premier":$chiffreAtester." n'est pas un nombre premier";


echo "<hr>";
require "yolo.php";
echo "<hr>";
/*

//require permet de faire un fatal error au lieux d'un petite erreur
//TABLEAU :::
echo "<hr>";
$prenoms =["yves", "pierre", "marc"];

echo $prenoms[0]; // afficher certain prénoms du TABLEAU
echo "<pre>";               //pre = auto formater
print_r($prenoms);            // pour afficher la totalité d'un tableau
echo "</pre>";

$prenoms[] = "jeremy"; //insérer 4ème prenoms ( a la suite )
echo "<pre>";               //pre = auto formater
print_r($prenoms);            // pour afficher la totalité d'un tableau
echo "</pre>";



// préciser d'autre clé que celle automatique
$prenoms =[0=>"yves", 2=>"pierre", 12=>"marc"];
echo "<pre>";               //pre = auto formater
print_r($prenoms);            // pour afficher la totalité d'un tableau
echo "</pre>";
echo "<hr>";

*/

/*$eleve = ["nom"=>"FAURE","prenom"=>"Théo","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7];
echo "<pre>";
print_r($eleve);
echo "</pre>";


echo $eleve["nom"]." ".$eleve["prenom"]." à une moyenne de ".($eleve["cc1"]+$eleve["cc2"]+$eleve["partiel"]*2)/4;



echo "<hr>";

$listOfStudent = [ ["nom"=>"FôRE","prenom"=>"Thea","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"yolo","prenom"=>"guty","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"théo","prenom"=>"toto","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"FAURE","prenom"=>"Théo","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7] ];


echo "<pre>";
print_r($listOfStudent);
echo "</pre>";


echo $listOfStudent[0]["nom"]." ".$listOfStudent[0]["prenom"]." à une moyenne de ".($listOfStudent[0]["cc1"]+$listOfStudent[0]["cc2"]+$listOfStudent[0]["partiel"]*2)/4;
*/


$listOfStudent = [ ["nom"=>"FôRE","prenom"=>"Thea","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"yolo","prenom"=>"guty","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"théo","prenom"=>"toto","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7],["nom"=>"FAURE","prenom"=>"Théo","cc1"=> 12,"cc2"=> 11 ,"partiel"=> 7] ];


echo "<pre>";
print_r($listOfStudent);
echo "</pre>";


echo $listOfStudent[0]["nom"]." ".$listOfStudent[0]["prenom"]." à une moyenne de ".($listOfStudent[0]["cc1"]+$listOfStudent[0]["cc2"]+$listOfStudent[0]["partiel"]*2)/4;

echo "<br>";
echo "<hr>";
//Boucle foreach

foreach ($listOfStudent as $cle => $student) {
  echo $student["nom"]." ".$student["prenom"]." à une moyenne de ".(($student["cc1"]+$student["cc2"]+$student["partiel"]*2)/4)."<br>";

}


// exercice

?>



<table border ='1px'>
<tr>
<th> Nom </th>
<th> Prénom </th>
<th> Moyenne </th>
<th> Clé </th>
</tr>


<?php
foreach ($listOfStudent as $cle => $student) {
echo "<tr>";
echo "<td>".$student["nom"]."</td>";
echo "<td>".$student["prenom"]."</td>";
echo "<td>".(($student["cc1"]+$student["cc2"]+$student["partiel"]*2)/4)."</td>";
echo "<td>$cle  </td>";
echo "</tr>";

}

echo "</table>";

?>
</section>





</body>
