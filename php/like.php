<?php

session_start();
require "config.php";

  try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }



  $query = $db->prepare("INSERT INTO love (email, film) VALUES (:email, :film)");
  $query->execute([
    "email"=>$_SESSION['email'],
    "film"=>$_SESSION['film']]);

    header('Location: ../index2.php');
