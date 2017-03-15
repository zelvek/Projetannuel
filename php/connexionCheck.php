<?php
require "php/config.php";



if (count($_POST) == 2
  && !empty($_POST["checkPseudo"])
  && !empty($_POST["checkPass"])
){
  $activation = new PDO('mysql:host = '.DB_HOST.'; dbname =  '.DB_NAME, DB_USER, DB_PWD);
  $_POST["name"] = trim($_POST["checkPseudo"]);
  $recherchePseudo = $activation query->('SELECT nickname FROM esgi1i2 WHERE nickname = '$_POST["checkPseudo"]);
  if ($recherchePseudo == false){
    die("Erreur pseudo inexistant");


  }
  else if($recherchePseudo != false ){
      $recherchePass = $activation query->('SELECT pwd FROM esgi1i2 WHERE nickname = '$_POST["checkPseudo"] );
      $result = password_hash($_POST["checkPass"], $recherchePass);
    }

  if($result == false){
    die("Error mot de passe inexistant");

  }

  else{
    echo("Tout est OK");

  }








}
