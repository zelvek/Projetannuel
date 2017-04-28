<?php
session_start();
require "config.php";


try{
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD);
}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

function getTitle($conn) {
	$sql =  'SELECT Title FROM movies';
	foreach  ($conn->query($sql) as $row) {
		print $row['Title'] . "\t";
    ?>
    <form action = "">
      <Button name = "ajout" onclick = "pdoRun($row)">Ajouter</Button><br>
    </form>
    <?php
  }
}
function pdoRun($row){
$query = $db -> prepare('UPDATE users SET Movie = '$row['Title']);
$query->execute([
  "Movie" => $row['Title'];
]);
}
getTitle($db);
 ?>
