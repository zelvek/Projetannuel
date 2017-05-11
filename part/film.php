<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FILM</title>
  </head>
  <body>




<body>


<?php

//require_once "config.php";
//session_start();
try {
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}





$query = $db->prepare("SELECT film FROM love WHERE Email=?");



$query->execute([$_SESSION["email"]]);


echo $query->errorInfo()[2];





$film = $query->fetchAll(PDO::FETCH_ASSOC);




$saveid = 0;
$savenumber = 0;





    if(!empty($film)){
      echo "<table width='75%' border='4'>";
      echo "<tr>";
      echo "<td> Film Aimé </td>";
      echo "<td> Auteur </td>";
      echo "</tr>";
      echo "<hr/>";
for ($i=0; $i < count($film) ; $i++) {
  # code...

      foreach($film[$i] as $value) {
        echo "<tr>";
        echo "<td>".$value."</td>";
        echo "<td>".$_SESSION["email"]."</td>";
        echo "</tr>";

    }
}

//selection de tout les utilisateurs

$email = $db -> prepare("SELECT film FROM love WHERE email = :email");
$email->execute(["email"=>$_SESSION['email']]);

$email = $email->fetchall(PDO::FETCH_ASSOC);


//print_r($email);

$user = $db -> query("SELECT Email FROM users");

$user = $user->fetchall(PDO::FETCH_ASSOC);



//print_r($user);
for ($i=0; $i < count($user) ; $i++) {
  foreach ($user[$i] as  $value) {

    $valeur = $db -> prepare("SELECT film FROM love WHERE email = :email");
    $valeur->execute(["email"=>$value]);

    $valeur = $valeur->fetchall(PDO::FETCH_ASSOC);

if ($valeur == NULL || $email == NULL){



}else{
//........................................................................................................................................................

$test = array_diff($valeur["0"], $email["0"]);
//echo $value;

//print_r($valeur);
//print_r($email);


//print_r($test);


if ( !empty($test) && $savenumer < count($test)) {
$savenumber = count($test);
$saveid = $value;
}












  }

}





}



//print_r($test);


//echo "<br>";
//echo $saveid;





 $reponse = $db->prepare("SELECT film FROM love WHERE email = :email");
$reponse ->execute(["email"=>$saveid]);

$reponse = $reponse->fetchall(PDO::FETCH_ASSOC);

//echo $saveid;
//echo $savenumber;
//print_r($reponse["0"]);




if(count($reponse)==0 ){



  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 10");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

echo htmlspecialchars($donnees['Title']);
echo "<br>";
echo "<img src=".htmlspecialchars($donnees['Picture'])." alt=".htmlspecialchars($donnees['Title'])."> ";

echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$donnees['id'].">";

echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

echo "<br>";
echo "</form>";

echo "</center>";

echo"<hr>";
}

}else {



  foreach ($reponse["0"] as $value) {


    $cherche = $db->prepare("SELECT Title, Picture, id FROM movies where id = :id");
    $cherche->execute(["id"=>$value]);
$_SESSION["Value"] = $value;
    echo $query->errorInfo()[2];

//print_r($cherche);



while ($donnees = $cherche->fetch())
{




echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

echo htmlspecialchars($donnees['Title']);
echo "<br>";
echo "<img src=".htmlspecialchars($donnees['Picture'])." alt=".htmlspecialchars($donnees['Title'])."> ";

echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$donnees['id'].">";

echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

echo "<br>";
echo "</form>";

echo "</center>";

echo"<hr>";
}


//".htmlspecialchars($donnees['Title'])."
}



if (count($cherche)< 10 ) {


  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 9");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

echo htmlspecialchars($donnees['Title']);
echo "<br>";
echo "<img src=".htmlspecialchars($donnees['Picture'])." alt=".htmlspecialchars($donnees['Title'])."> ";

echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$donnees['id'].">";

echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

echo "<br>";
echo "</form>";

echo "</center>";

echo"<hr>";
}

}

}




}else {

  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 10");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

echo htmlspecialchars($donnees['Title']);
echo "<br>";
echo "<img src=".htmlspecialchars($donnees['Picture'])." alt=".htmlspecialchars($donnees['Title'])."> ";

echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$donnees['id'].">";

echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

echo "<br>";
echo "</form>";

echo "</center>";

echo"<hr>";
}


//".htmlspecialchars($donnees['Title'])."
}





 ?>

 <style>


   img{
     weight: 50px!important;
     height: 200px!important;

   }

   .fra{

background-color: rgba(225, 225, 225, .8);

   }

   button{

     margin-left: -20px;
   }


   .test{

display: none;

   }

   input{

     margin-left: auto;
     margin-right: auto;
   }



 </style>



<?php
if ($saveid != 0 ) {
echo "<h2>Vous êtes liée actuellement avec ".$saveid."</h2>";

}else {
  echo "Vous n'avez actuellement pas suffisament de like ou trop et nous ne pouvons vous relier avec quelqu'un";
}


 ?>
</body>
</html>
