<?php




require "../php/config.php";

session_start();


if (!isset($_SESSION['email'])) {
header('Location: ../index.php');
}else{

                          try{
                              $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
                          }catch(Exception $e){
                            die("Erreur SQL : ".$e->getMessage() );
                          }

                          $query = $db->prepare('SELECT Is_admin FROM users WHERE email = :email;');
                            $query->execute(["email" =>$_SESSION['email']] );


                            $w = $query->fetch()["Is_admin"];


                            if ($w == 1) {





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

echo("erreur");

}else {


  try{

  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

  }catch(Exception $e){
  die("erreur SQL :".$e->getMessage());

  }


$query=$db-> prepare("UPDATE users SET Pwd = :Pwd WHERE Email=:Email");
$query-> execute(["Email"=>$_SESSION["user_email"],
"Pwd" => password_hash($_POST["mdp"], PASSWORD_DEFAULT)]);

echo ($query->errorInfo()[2]);
header("Location: ../index2.php");

unset($_SESSION["user_email"]);

}

}else{


echo "test";

}



}else {
  header('Location: ../index.php');
}

}





 ?>
