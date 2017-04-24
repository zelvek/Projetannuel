<?php

require "../php/config.php";



if (count($_GET) ==2
&& !empty($_GET["mdp"])
&& !empty($_GET["mdp1"])
){
$error = false;

  if (strlen($_GET["pwd"])<8 || strlen($_GET["pwd"])> 500) {
  $error = true;

  }


  if ($_GET["pwd"] != $_GET["pwd2"]) {
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


echo "test";

}











 ?>
