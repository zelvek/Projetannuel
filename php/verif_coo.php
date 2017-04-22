<?php

if ($_SESSION['utilisateur'] == NULL) {
  header('Location ../index.php');
}else {

  


  try{
      $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }





  $query = $db->prepare('SELECT Is_connected FROM users WHERE email = :email;');
    $query->execute(["email" => $_SESSION["utilisateur"]] );
$p = $query->fetch()["Is_connected"];
if( $_SESSION["token"] == $p ){



}else {
  header('Location ../index.php');
}
}
