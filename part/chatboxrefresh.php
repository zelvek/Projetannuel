<?php

require_once "../php/config.php";

try{

$bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

$reponse = $bdd->query('SELECT pseudo, message FROM tchat ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}


print_r($donnees);
$reponse->closeCursor();

?>
