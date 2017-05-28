<?php
require 'config.php';

if( count($_POST) == 5
&& !empty($_POST["name"])
&& !empty($_POST["surname"])
&& isset($_POST["birthday"])
&& !empty($_POST["Job"])
&& isset($_POST["biographie"])){

  $error = false;
  $listOfErrors = [];
  try{
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

  }catch(Exception $e){
  die("erreur SQL :".$e->getMessage());

  }

$_POST["name"] = trim($_POST["name"]);
$_POST["surname"] = trim($_POST["surname"]);
$_POST["birthday"] = trim($_POST["birthday"]);
$_POST["job"] = trim($_POST["Job"]);
$_POST["biographie"] = trim($_POST["biographie"]);



if (strlen($_POST["name"])<2 || strlen($_POST["name"])> 50  ){
  $error = true;
  $listOfErrors[] = 1;
}
if (strlen($_POST["surname"])<2 || strlen($_POST["surname"])> 50) {
  $error = true;
    $listOfErrors[] = 2;
}

if (!array_key_exists($_POST["Job"],$listOfJob)) {
$error = true;
$listOfErrors[] = 15;

}
if (strlen($_POST["biographie"])> 1500) {
  $error = true;
    $listOfErrors[] = 16;
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



  $query = $db->prepare('SELECT Id FROM staff WHERE Name=:Name');
  $query->execute(["Name" => $_POST["name"]]);
  $resultat = $query->fetch();

  if( !empty($resultat)){
    $error = true;
    $listOfErrors[] = 14;
  }

if($error) {
  $_SESSION["errors_form"] = $listOfErrors;
  $_SESSION["data_form"] = $_POST;
header('Location: ajoutstaff.php');
echo "jqhdkjqsh";


}else {

$query = $db->prepare("INSERT INTO staff (Name, Surname, Job, Birthday, Biographie) VALUES (:Name, :Surname, :Job, :Birthday, :Biographie)");
$query->execute([
"Name" => $_POST["name"],
"Surname" => $_POST["surname"],
"Job" => $_POST["job"],
"Birthday" => $year."-".$month."-".$day,
"Biographie" => $_POST["biographie"]]);
print_r($query->errorInfo());
header( 'Location ../index2.php');



  }
}
