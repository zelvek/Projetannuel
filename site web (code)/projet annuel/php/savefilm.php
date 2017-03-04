<?php
session_start();
require "conf.inc.php";

if(count($_POST)==8
&& !empty($_POST["picture"])
&& !empty($_POST["title"])
&& !empty($_POST["real"])   //
&& !empty($_POST["acteur"])  //
&& !empty($_POST["description"])
&& !empty($_POST["categorie"])
&& !empty($_POST["genre"])
&& !empty($_POST["sortie"])){



$error = false;
$listOfErrors = [];


$_POST["sortie"] = trim($_POST["sortie"]);

$_POST["picture"] = trim($_POST["picture"]);



//connexion bdd






//compter les charactère et verif


if (strlen($_POST["real"])<2 || strlen($_POST["real"])> 100  ){
  $error = true;
$listOfErrors[] = 1;

}
if (strlen($_POST["acteur"])<2 || strlen($_POST["acteur"])> 100) {
  $error = true;
$listOfErrors[] = 2;
}

// vérif existence cat et genre


if (!array_key_exists($_POST["genre"],$listOfGenre)) {
$fatalerror = true;



}
if (!array_key_exists($_POST["categorie"],$listOfCategory)) {
$fatalerror = true;
}



// date


if( strlen($_POST["sortie"]) == 10 ){

		if( substr_count($_POST["sortie"], "/") == 2){
			$arraySortie = explode("/", $_POST["sortie"]);

			$year = $arraySortie[2];
			$month = $arraySortie[1];
			$day = $arraySortie[0];


		}else if( substr_count($_POST["sortie"], "-") == 2){

			$arraySortie = explode("-", $_POST["sortie"]);

			$year = $arraySortie[0];
			$month = $arraySortie[1];
			$day = $arraySortie[2];


		}else{
			$error = true;
			$listOfErrors[] = 3;
		}

	}else{
		$error = true;
		$listOfErrors[] = 4;
	}



	if( !empty($year) && !empty($month) && !empty($day) && checkdate($month,$day,$year )
 ){
		//Entre 0ans et 100ans
		//time();
		$oneYear = 365*24*60*60;
		$time200Year = time() - $oneYear*200;
		$timeSortie = strtotime($year."-".$month."-".$day);

		if($timeSortie<$time200Year) {
			$error = true;
			$listOfErrors[] = 5;
		}

	}else{

	}

if ($error) {
  $_SESSION["errors_form"] = $listOfErrors;
  $_SESSION["data_form"] = $_POST;
  header('Location: ../part/ajoutf.php');
}else {
header('Location: http://www.youtube.com');

}

















}








 ?>
