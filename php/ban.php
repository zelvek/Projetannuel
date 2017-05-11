<?php
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


                            if ($w != 1) {
header("Location : ../index.php");

                            }

                          }

require "config.php";


try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

$query = $db->prepare('UPDATE users set Is_delete = 1 WHERE email = :email');
  $query->execute(["email" =>$_SESSION["user_email"]] );



  unset($_SESSION["user_email"]);


  header("Location: ../index2.php");
