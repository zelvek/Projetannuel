<?php

session_start();
require "config.php";


try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}



  $query = $db->prepare('SELECT pwd FROM users WHERE email = :email;');
    $query->execute(["email" =>$_POST["email"]] );
    if( password_verify($_POST["pwd"], $query->fetch()["pwd"])){


$test = AUTH_US;


$query = $db->prepare("UPDATE users SET Is_connected = :Is_connected WHERE email = :email");
  $query->execute(["Is_connected"=>$test,"email"=>$_POST["email"]]);





$_SESSION['utilisateur'] = $_POST["email"];
$_SESSION['token'] =$test;


if ($_SESSION['token'] == $test) {
  header('Location: ../index2.php');
}




  }

  else {
    echo("ERREUR");
  }
