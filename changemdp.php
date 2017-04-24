<?php

require "../php/config.php";



if (count($_GET) ==3
&& !empty($_GET["mdp"])
&& !empty($_GET["mdp1"])
&& !empty($_GET[""])){
$error = false;

  if (strlen($_POST["pwd"])<8 || strlen($_POST["pwd"])> 500) {
  $error = true;

  }


  if ($_POST["pwd"] != $_POST["pwd2"]) {
    $error = true;

  }



if($error = true){

echo("erreur");

}else {


  try{

  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

  }catch(Exception $e){
  die("erreur SQL :".$e->getMessage());

  }


$query=$db-> prepare("UPDATE users SET Password = :Password WHERE Email=:Email");
$query-> execute(["Email"=>$_GET["email"],
"Pwd" => password_hash($_GET["mdp"], PASSWORD_DEFAULT)]);

header("Location: ../index2.php");



}

}else{
header("Location: www.google.com");



}











 ?>
