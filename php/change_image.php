<?php

session_start();

echo $_POST["picture"];
echo $_SESSION["film"];

require "config.php";
try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}



$query=$db-> prepare("UPDATE movies SET Picture = :Picture WHERE id=:id");
$query->execute(["Picture" =>$_POST["picture"],
"id"=>$_SESSION["film"]] );

Header('Location: ../index2.php');

?>
