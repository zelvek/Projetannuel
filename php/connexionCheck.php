<?php



require "config.php";

try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}



  $query = $db->prepare('SELECT pwd FROM users WHERE email = :email;');
    $query->execute(["email" =>$_POST["email"]] );
    if( password_verify($_POST["pwd"], $query->fetch()["pwd"])){

  echo("you are connected !");
  }

  else {
    echo("oh... fail");
  }
