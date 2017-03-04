<?php
include "header.php";
require "conf.inc.php";
 ?>
<section>
  <h1>Vous êtes connecté</h1>
</section>
<?php
echo "<div>";
if(!empty($_SESSION["errors_form"])){

echo "<ul>";
foreach ($_SESSION["errors_form"] as $key => $errors) {
echo "<li>".$listOfErrors[$errors]."</li>";
}
echo "<ul>";
unset($_SESSION["errors_form"]);
//session_destroy();
$data_form = $_SESSION["data_form"];

}

 ?>

<form action="connexion.php" method="post">

  <input type="email" name="email" value="" required="required" placeholder="Votre email"><br>
  <input type="password" name="pwd" value="" required="required" placeholder="Votre mdp"><br>

  <input type="submit" value="S'inscrire"><br>



</form>




<?php

try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

if(!empty($_POST['email']) && !empty($_POST['pwd'])) {

  $query = $db->prepare("SELECT password FROM users WHERE email = :email");
  $query->execute([ "email"=>$_POST["email"]]);
$pass = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

  if ($query == $pass) {
    echo "work";
    header('Location: http://facebook.com');
  }else {
    echo "not work";
    header('Location: http://youtube.com');

  }













}else {
  echo "un champ n'est pas remplis";
}


 ?>




<?php include "footer.php";  ?>
