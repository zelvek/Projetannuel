
<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

<?php

session_start();

require "functions.php";



 $_SESSION['film'] = $_POST['id'];
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
  echo "<button type=\"button\" name=\"button\" onclick=\"document.location.href = 'like.php'\">j'aime </button>";
  echo "<i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>";
  echo "</div>";

}else {

  echo "<button type=\"button\" name=\"button\" onclick=\"document.location.href = 'unlike.php'\">J'aime plus </button>";
  echo "<i class=\"fa fa-thumbs-o-down\" aria-hidden=\"true\"></i>
";
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


                          try{
                              $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
                          }catch(Exception $e){
                            die("Erreur SQL : ".$e->getMessage() );
                          }

                          $query = $db->prepare('SELECT Is_admin FROM users WHERE email = :email;');
                            $query->execute(["email" =>$_SESSION['email']] );


                            $w = $query->fetch()["Is_admin"];


                            if ($w == 1) {


                            echo  "<form action=\"change_image.php\" method=\"post\">

                          <input type= \"text\" name=\"picture\" placeholder=\"adresse de l'image \">
                              <input type=\"submit\">
                              </form>"

?>



<?php



                            }





 ?>
