<?php
session_start();
require "../php/functions.php";
try{

$bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}


$req = $bdd->prepare('INSERT INTO tchat (pseudo, message) VALUES(:pseudo, :message)');
$req->execute(["pseudo" =>$_SESSION["email"],"message"=>$_POST['message']]);


header("Location: ../chat.php");
?>
