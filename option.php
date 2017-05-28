<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LECTUS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/stylehhh.css" rel="stylesheet">


</head>

<body>

  <?php include("part/menu.php"); ?>






    <div class="container">

      <script src="js/namuol-cheet.js/cheet.min.js"
              type="text/javascript"></script>

      <script src="js/namuol-cheet.js/cheet.js" type="text/javascript">*


      </script>


      <script>
      cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
        alert('Vous avez trouvé notre easter Egg bien joué =) ');
        document.location.href="part/gardian.php";
      });
      </script>

  <?php

  try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
  }catch(Exception $e){
    die("Erreur SQL : ".$e->getMessage() );
  }



  $query = $db->prepare("SELECT * FROM users WHERE Email=?");



  $query->execute([$_SESSION["email"]]);


  echo $query->errorInfo()[2];





  $user = $query->fetchAll(PDO::FETCH_ASSOC);







echo "<table><tr><td>";
  echo "votre ip actuelle est : ".$_SERVER['REMOTE_ADDR'];
echo "</td></tr></table>";

  ?>
  <center>
  <form class="" action="option.php" method="post">

    <table>

  <tr>


  <td>Votre nouveau Mot de passe : </td><td><input type="password" name="mdp" value="" placeholder="Votre nouveau mot de passe"></td></tr>

  <tr>
    <td>retappez Votre nouveau Mot de passe :</td>
    <td><input type="password" name="mdp2" value="" placeholder="Votre nouveau mot de passe"><br>
  </td>
  </tr>
  <br>


  <tr>
    <td><input type="submit" name="" value="Changer">
  </td>
  </tr>
  </form>
  </table>
  </center>
  <?php


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

echo "les mots de passe ne correspondent pas ";

  }else {


    try{

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

    }catch(Exception $e){
    die("erreur SQL :".$e->getMessage());

    }


  $query=$db-> prepare("UPDATE users SET Pwd = :Pwd WHERE Email=:Email");
  $query-> execute(["Email"=>$_SESSION["email"],
  "Pwd" => password_hash($_POST["mdp"], PASSWORD_DEFAULT)]);

  echo ($query->errorInfo()[2]);
  //header("Location: ../index2.php");
echo "done";


  }

  }else{



  }

  ?>


<br><br>  <SCRIPT LANGUAGE="JavaScript">
  <!-- Disable
  function disableselect(e){
  return false
  }

  function reEnable(){
  return true
  }

  //if IE4+
  document.onselectstart=new Function ("return false")
  document.oncontextmenu=new Function ("return false")
  //if NS6
  if (window.sidebar){
  document.onmousedown=disableselect
  document.onclick=reEnable
  }
  //-->
  </script>


  <center> besoin d'aide contactez nous :<br>


<a class="twitter-timeline" data-lang="fr" data-width="220" data-height="200" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/root_Updated">Tweets by root_Updated</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<br><a href="https://twitter.com/intent/tweet?screen_name=root_Updated" class="twitter-mention-button" data-size="large" data-text="Hey je suis sur ton site @root_updated" data-lang="fr" data-dnt="true" data-show-count="false">Tweet to @root_Updated</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>  </center>      <hr class="featurette-divider">







            <?php include("part/footer.php"); ?>


    </div>


    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>
