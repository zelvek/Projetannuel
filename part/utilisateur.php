<?php

try {
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}



$query = $db->prepare("SELECT * FROM users WHERE Email=?");



$query->execute([$_SESSION["email"]]);


echo $query->errorInfo()[2];





$user = $query->fetchAll(PDO::FETCH_ASSOC);








echo "votre ip actuelle est : ".$_SERVER['REMOTE_ADDR'];





 ?>
