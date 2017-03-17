<?php


function cookieset(){


  try{
      $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }



setcookie("user_lectus", AUTH_US, time() +3600, '/Projetannuel/'  );



$query = $db->prepare("UPDATE users SET is_connected = :is_connected WHERE email = :email");
$query->execute(["is_connected"=>AUTH_US,
                  "email"=>$_POST["email"]]);





  }
