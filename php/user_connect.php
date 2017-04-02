<?php


function cookieset(){


  try{
      $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }



setcookie("user_lectus", AUTH_US, time() +3600, '/Projetannuel/'  );



$query = $db->prepare("UPDATE USERS SET Is_connected = :Is_connected WHERE Email = :Email");
$query->execute(["Is_connected"=>AUTH_US,
                  "Email"=>$_POST["Email"]]);





  }
