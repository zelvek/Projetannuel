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
<center>
<form class="" action="part/utilisateur.php" method="post">

  <table>

<tr>


<td>Votre nouveau Mot de passe : </td><td><input type="password" name="mdp" value="" placeholder="Votre nouveau mot de passe"></td></tr>

<tr>
  <td>retappez Votre nouveau Mot de passe :</td>
  <td><input type="password" name="mdp2" value="" placeholder="Votre nouveau mot de passe"><br>
</td>
</tr>
<br>


<tr>
  <td><input type="submit" name="" value="Changer">
</td>
</tr>
</form>
</table>
</center>
<?php


if (count($_POST) ==2
&& !empty($_POST["mdp"])
&& !empty($_POST["mdp2"])
){
$error = false;

  if (strlen($_POST["mdp"])<8 || strlen($_POST["mdp"])> 500) {
    echo "erreur1";
  $error = true;

  }
  if (strlen($_POST["mdp2"])<8 || strlen($_POST["mdp2"])> 500) {
    echo "erreur2";
  $error = true;

  }


  if ($_POST["mdp"] != $_POST["mdp2"]) {
    echo "erreur3";
    $error = true;

  }



if($error == true){



}else {


  try{

  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

  }catch(Exception $e){
  die("erreur SQL :".$e->getMessage());

  }


$query=$db-> prepare("UPDATE users SET Pwd = :Pwd WHERE Email=:Email");
$query-> execute(["Email"=>$_SESSION["email"],
"Pwd" => password_hash($_POST["mdp"], PASSWORD_DEFAULT)]);

echo ($query->errorInfo()[2]);
//header("Location: ../index2.php");



}

}else{



}













 ?>
