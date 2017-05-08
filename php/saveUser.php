
<?php
require "config.php";
session_start();
if( count($_POST)==11
&& !empty($_POST["gender"])
&& isset($_POST["name"])
&& isset($_POST["surname"])
&& !empty($_POST["nickname"])
&& !empty($_POST["birthday"])
&& !empty($_POST["email"])
&& !empty($_POST["pwd"])
&& !empty($_POST["pwd2"])
&& !empty($_POST["country"])
&& !empty($_POST["legacy"])
&& !empty($_POST["captcha"])){
  $error = false;
  $listOfErrors = [];
  try{
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
  }catch(Exception $e){
  die("erreur SQL :".$e->getMessage());
  }
$_POST["name"] = trim($_POST["name"]);
$_POST["nickname"] = trim($_POST["nickname"]);
$_POST["surname"] = trim($_POST["surname"]);
$_POST["birthday"] = trim($_POST["birthday"]);
$_POST["email"] = trim($_POST["email"]);
if (strlen($_POST["name"])<2 || strlen($_POST["name"])> 50  ){
  $error = true;
  $listOfErrors[] = 1;
}
if (strlen($_POST["surname"])<2 || strlen($_POST["surname"])> 50) {
  $error = true;
    $listOfErrors[] = 2;
}
if (strlen($_POST["nickname"])<2 || strlen($_POST["nickname"])> 50) {
  $error = true;
  $listOfErrors[] = 3;
}
if (strlen($_POST["pwd"])<8 || strlen($_POST["pwd"])> 500) {
$error = true;
$listOfErrors[] = 4;
}
if ($_POST["pwd"] != $_POST["pwd2"]) {
  $error = true;
  $listOfErrors[] = 5;
}
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  $error = true;
  $listOfErrors[] = 6;
}
if ($_SESSION["captcha"] != $_POST["captcha"] ) {
  $error = true;
  $listOfErrors[] = 7;
}
if (!array_key_exists($_POST["gender"],$listOfGender)) {
$error = true;
$listOfErrors[] = 8;
}
if (!array_key_exists($_POST["country"],$listOfCountry)) {
$error = true;
$listOfErrors[] = 9;
}
if( strlen($_POST["birthday"]) == 10 ){
		if( substr_count($_POST["birthday"], "/") == 2){
			$arrayBirthday = explode("/", $_POST["birthday"]);
			$year = $arrayBirthday[2];
			$month = $arrayBirthday[1];
			$day = $arrayBirthday[0];
		}
      else if( substr_count($_POST["birthday"], "-") == 2){
			$arrayBirthday = explode("-", $_POST["birthday"]);
			$year = $arrayBirthday[0];
			$month = $arrayBirthday[1];
			$day = $arrayBirthday[2];
		}
    else{
			$error = true;
			$listOfErrors[] = 10;
		}
	 }
   else{
		$error = true;
		$listOfErrors[] = 11;
	 }
	if( !empty($year) && !empty($month) && !empty($day) && checkdate($month,$day,$year )
 ){
		$oneYear = 365*24*60*60;
		$time100Year = time() - $oneYear*100;
		$time10Year = time() - $oneYear*10;
		$timeBirthday = strtotime($year."-".$month."-".$day);
		if($timeBirthday<$time100Year || $timeBirthday>$time10Year ) {
			$error = true;
			$listOfErrors[] = 12;
		}
	}else{
		$error = true;
		$listOfErrors[] = 13;
	}
  $query = $db->prepare('SELECT Id FROM users WHERE Email=:Email');
  $query->execute(["Email" => $_POST["email"]]);
  $resultat = $query->fetch();
  if( !empty($resultat)){
    $error = true;
    $listOfErrors[] = 14;
  }
if($error) {
  $_SESSION["errors_form"] = $listOfErrors;
  $_SESSION["data_form"] = $_POST;
header('Location: ../index.php');
}else {
$query = $db->prepare("INSERT INTO users (Gender,Name,Surname,Nickname,Pwd,Email,Birthday,Country) VALUES (:Gender ,:Name ,:Surname ,:Nickname ,:Pwd ,:Email ,:Birthday ,:Country )");
$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$query->execute([
  "Gender"=>$_POST["gender"],
"Name"=>$_POST["name"],
"Surname"=>$_POST["surname"],
"Nickname"=>$_POST["nickname"],
"Email"=>$_POST["email"],
"Pwd"=>$pwd,
"Birthday"=>$year."-".$month."-".$day,
"Country"=>$_POST["country"] ]);
//header( 'Location ../index2.php');
$query = $db->prepare("INSERT INTO tchat (pseudo, message) VALUES (:pseudo, :message )");
$e = 'inscription';
$query->execute([
  "pseudo"=>$_POST["email"],
"message"=>$e ]);
print_r($query->errorInfo());
//header("Location: ../index.php");
  }
}
