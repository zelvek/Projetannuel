<?php

session_start();
require "config.php";

  try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }



  $query = $db->prepare("DELETE FROM love WHERE email = :email and film = :film");
  $query->execute([
    "email"=>$_SESSION['email'],
    "film"=>$_SESSION['film']]);

    header('Location: ../index2.php');
