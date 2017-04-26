<?php
session_start();

require "config.php";


try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

$query = $db->prepare('UPDATE users set Is_delete = 1 WHERE email = :email');
  $query->execute(["email" =>$_SESSION["user_email"]] );



  unset($_SESSION["user_email"]);


  header("Location: ../index2.php");
