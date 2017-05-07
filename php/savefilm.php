<?php

require "ajoutFilm.php";
require "conf.inc.php";

if(count($_POST)==6
  && isset($_POST["picture"])
  && isset($_POST["title"])
  && isset($_POST["description"])
  && isset($_POST["categorie"])
  && isset($_POST["genre"])
  && isset($_POST["sortie"])){


$error = false;
$listOfErrors = [];


$_POST["sortie"] = trim($_POST["sortie"]);
$_POST["picture"] = trim($_POST["picture"]);



//connexion bdd
try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

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
  header('Location: ajoutFilm.php');
}else {

$id = md5(time());
  echo ($year );
  echo ($month);
  echo ($day );
  $query = $db->prepare("INSERT INTO movies (Picture, Title, Description, Date_out, Category, Type, id) VALUES (:Picture, :Title, :Description, :Date_out, :Categorie, :Type, :id )");
  $query->execute([
  "Picture"=>$_POST["picture"],
  "Title"=>$_POST["title"],
  "Description"=>$_POST["description"],
  "Date_out"=>$year."-".$month."-".$day,
  "Categorie"=>$_POST["categorie"],
  "Type"=>$_POST["genre"],
  "id"=>$id]);


//  print_r($query->errorInfo());

    }

}



 ?>
