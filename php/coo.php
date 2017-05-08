<?php



if(isset($_SESSION["email"]) == false && isset($_SESSION["token"]) == false){
  echo "DDDDDDDDDDDDDDDDD";

header("Location: ../index.php");

}else {
  try{
      $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }

  $query = $db->prepare("UPDATE users SET ip = :ip WHERE Email = :Email");



  $query->execute(["ip" =>$_SERVER['REMOTE_ADDR'],
"Email"=>$_SESSION["email"]]);




} ?>
