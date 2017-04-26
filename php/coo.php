<?php



if(isset($_SESSION["email"]) == false && isset($_SESSION["token"]) == false){
  echo "DDDDDDDDDDDDDDDDD";

header("Location: ../index.php");

} ?>
