

<?php

session_start();




 $_SESSION['film'] = $_POST['id'];
require "functions.php";
try {
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
}catch(Exception $e){
  die("Erreur SQL : ".$e->getMessage() );
}



$reponse = $db->prepare("SELECT * FROM movies WHERE id = :id ");
$reponse->execute([
"id"=>$_POST['id']]);

echo $reponse->errorInfo()[2];

while ($donnees = $reponse->fetch())
{




echo "<center>";

echo $donnees['Title'];

echo "<br>";
echo "<img src=".htmlspecialchars($donnees['Picture'])." alt=".htmlspecialchars($donnees['Title'])."> ";



echo "<br>";


echo "Description : ";

echo "<br>";

echo "<div id=\"divun\">";

echo htmlspecialchars($donnees['Description']);



echo "<br>";


$like = $db->prepare("SELECT film FROM love WHERE email = :email and film = :film ");
$like->execute([
"email"=>$_SESSION["email"],
"film"=>$_SESSION["film"]]);
$like = $like->fetchall(PDO::FETCH_ASSOC);

//print_r($like);
//echo Count($like);
if (count($like) == 0) {
  echo "<button type=\"button\" name=\"button\" onclick=\"document.location.href = 'like.php'\">J'aime </button>";
  echo "</div>";

}else {

  echo "<button type=\"button\" name=\"button\" onclick=\"document.location.href = 'unlike.php'\">J'aime plus </button>";
  echo "</div>";

}





echo "<br>";





echo "</center>";
}

?>


<style>
img{"email"


  weight: 50px!important;
  height: 200px!important;


}

#divun{

  weight: 50px !important;
  height: 20px !important;
  display: inline-block;

}
</style>
<?php




 ?>
