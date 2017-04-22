
 <?php


require "config.php";


 	function connectDb(){
 		try {
			$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
		}catch(Exception $e){
			die("Erreur SQL : ".$e->getMessage() );
		}
		return $db;
 	}


 	function isConnected(){
 		//verification de l'existance des sessions
 		if(!empty($_SESSION["email"]) && !empty($_SESSION["token"])){
 		//chercher l'existance dans la bdD(token +  email)
 			$db= connectDb();
 			$query = $db->prepare("SELECT 1 FROM users WHERE email=:email AND  Is_connected=:Is_connected ");
 			$query-> execute([
 						"email"=>$_SESSION["email"],
 						"Is_connected"=>$_SESSION["token"]
 				]);
 			if($query-> rowCount()) {
	 			//si oui
	 			$_SESSION["token"]=generateAccesToken($_SESSION["utilisateur"]);
	 			return true;


	 		}else{
		 		//si non (l'utilisateur possède des sessions mais ne sont pas valide)
		 		logOut();
		 		return false;
	 		}

	 	}else{
 		//les avariable de sessions n'existe pas
 		return false;
 		}
 	}


 	function logOut($redirect = false){
 		// supprimer les variables de sessions
 		$db=connectDb();
 		$query=$db-> prepare("UPDATE users SET token=NULL WHERE email=:email ");
 		$query-> execute(["email"=>$_SESSION["email"]]);
 		// restaurer la bdd
 		unset($_SESSION["email"]);
 		unset($_SESSION["token"]);

 		if($redirect){
 			//rediriger vers index.php
 			header("Location: index.php");
 		}
 	}

 	function generateAccesToken($email){
 			// modification de la bdd avec un nouvel acces token
 		 $accesToken = md5(uniqid()."54r,;dSk Juhg.");
		 $db=connectDb();
		 $query = $db->prepare("UPDATE users SET Is_connected=:Is_connected WHERE email=:email ;");
		 $query -> execute([
		 		"Is_connected"=>$accesToken,
		 		"email"=>$email
		 	]);
 		//retourne le nouvel acces token
 		return $accesToken;
 	}
