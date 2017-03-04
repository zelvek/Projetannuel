<?php

session_start();

//setcookie("pseudo","dde", time()+326  );
//setcookie("test","jundi", time()+326  );
//setcookie("pseudo", "test");
//récupérer cookie


// variable de session

$_SESSION["connected"] = true;
$_SESSION["email"]= "zelvek@outlook.com";
echo $_SESSION["email"];
//echo "bonjour ".$_COOKIE["pseudo"];
//echo "bonjour ".$_COOKIE["test"];
