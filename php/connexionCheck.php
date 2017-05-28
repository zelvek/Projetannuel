
<?php

session_start();

require "functions.php";


try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}


$query = $db->prepare('SELECT Is_delete FROM users WHERE email = :email;');
  $query->execute(["email" =>$_POST["email"]] );

if($query->fetch()["Is_delete"] != 1){

  $query = $db->prepare('SELECT pwd FROM users WHERE email = :email;');
    $query->execute(["email" =>$_POST["email"]] );

    if( password_verify($_POST["pwd"], $query->fetch()["pwd"])){



    $_SESSION["email"] = $_POST["email"];
    $_SESSION["token"] = generateAccesToken($_SESSION["email"]);






      header('Location: ../admin/index.html.php');
    }else {
          header('Location: ../index.php');
  }

}else {
      header('Location: ../index.php');
  }
