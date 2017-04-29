

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



}else {

  $reponse = $db->query("SELECT Title, Picture, id FROM movies ORDER BY Date_out DESC LIMIT 0, 10");


  echo $query->errorInfo()[2];

while ($donnees = $reponse->fetch())
{

echo "<div class='fra'>";


echo "<img src='".htmlspecialchars($donnees['Picture'])."'class='img_film'>";

echo "<center>";

echo "<form class='row' action='/php/film_nrm.php' method='post'>";

echo "<input type='checkbox' name='valeur' value='".htmlspecialchars($donnees['id']).">";
echo " <input class='col-md-2 col-md-offset-5' type='submit' name='button' value=".htmlspecialchars($donnees['Title']).">";


echo htmlspecialchars($donnees['id']);

echo "</form>";

echo "</center>";

echo"<hr>";
}



}





 ?>

 <style media="screen">
   .img_film{
     weight: 50px!important;
     height: 200px!important;
     padding: 7px!important;
   }

   .fra{

background-color: rgba(225, 225, 225, .8);

   }

   button{

     margin-left: -20px;
   }

   input{

     background-color: blue;
   }


 </style>
