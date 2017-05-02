

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
      foreach($film[0] as $value) {
        echo "<tr>";
        echo "<td>".$value."</td>";
        echo "<td>".$_SESSION["email"]."</td>";
        echo "</tr>";
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

//print_r($valeur);
echo "<br>";
//print_r($email);


//print_r($test);


if ($savenumber < count($test) ) {
$savenumber = count($test);
$saveid = $value;
}












  }

}





}

$reponse = $db->prepare("SELECT film FROM live WHERE email = :email DESC LIMIT 0,10");
$reponse ->execute(["email"=>$saveid]);

$reponse = $reponse->fetchall(PDO::FETCH_ASSOC);

//echo $saveid;
//echo $savenumber;
print_r($reponse);




if(count($reponse)==0 ){



  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 10");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\">";

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




}else {

  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 10");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";



echo "<center>";
echo "<br>";
echo "<form action='php/film_nrm.php' method=\"POST\">";

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
