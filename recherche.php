<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LECTUS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

>
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/stylehhh.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <SCRIPT LANGUAGE="JavaScript">
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


  <?php include("part/menu.php");


//echo $_SESSION['email'];
//echo $_SESSION['token'];
//all work

   ?>


<center>
   <form class="" action="recherche.php" method="post">
   <input type="text" required="required" name="nom" value="" placeholder="entrez le nom de votre film / acteur / réalisateur"  size="45">
   <select name="type">
   <option value="acteur">Acteur</option>
   <option value="titre">Titre de Film</option>
   <option value="realisateur">Realisateur</option>

   </select>
   <input type="submit" name="" value="Ok">
   </form>
</center>
<?php

//require "php/config.php";
try{
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
}catch(Exception $e){
die("erreur SQL :".$e->getMessage());
}
if (!isset($_POST['nom'])) {

}else {


$url = "http://netflixroulette.net/api/api.php?";

$hash = "%20";

$_POST['nom'] = rtrim($_POST['nom']);

$chaine = explode(" ", $_POST['nom']);



//echo "AAAA".count($chaine);

if ($_POST['type'] == "acteur") {
$type = "actor=";
$url2 = $url.$type;

}
if ($_POST['type'] == "realisateur") {
$type = "director=";
$url2 = $url.$type;
}
if ($_POST['type'] == "titre") {
$type = "title=";
$url2 = $url.$type;

}

for ($i=0; $i <count($chaine)-1 ; $i++) {
$url2 = $url2.$chaine[$i].$hash;
}
$url2 = $url2.$chaine[count($chaine)-1];

//echo $url2;



$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url2,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
     CURLOPT_HTTPGET => true
));
$resp = curl_exec($curl);





if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}else {
//  echo "<br>";
  //echo "ça marche";
}


//echo $url2;

//echo "<br>";
$id = 0;
$title =0;
$year =0;
$summary = 0;
$img = 0;


$resp =json_decode($resp, true);

if (isset($resp['errorcode'])) {
echo "<center>";
  echo "la réponse n'est pas dans notre BDD retentez plus tard ou contactez nous pour que nous l'ajoutions =)";

?>

<br>
<a href="https://twitter.com/intent/tweet?screen_name=root_updated" class="twitter-mention-button" data-size="large" data-text="hey il manque un film :P" data-related="" data-lang="fr" data-dnt="true" data-show-count="false">Tweeter les Developpeurs</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php

  die();
}


for ($i=0; $i < count($resp) ; $i++) {


      foreach($resp[$i] as $key => $value) {
//echo $key.'========>'.$value."<br>";
//_____________________________________________________________________
if ($key == 'show_id') {
$id = $value;

}
if ($key == 'show_title') {
$title = $value;
//echo $title."<br>";
}
if ($key == 'release_year') {
$year = $value;
}
if ($key == 'release_year') {
$year = $value;
}
if ($key == 'summary') {
$summary = $value;
}
if ($key == 'poster') {
$img = $value;
//echo "<img src=".$img." alt=".$title.">";
//echo "<br>";
}
if ($key == 'category') {

$category = $value;

}







//____________________________________________________________________
}



$month = 1;
$day = 1;


$query = $db->prepare("SELECT id From movies where id = :id)");
$query->execute(["id"=>$id]);

$filmcheck = $query->fetchAll(PDO::FETCH_ASSOC);

if ($filmcheck != null) {

  if($id == 0) {
    echo "aucun film existe";
    die();
  }

  echo "<div class='fra'>";



  echo "<center>";
  echo "<br>";
  echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

  echo $title;
  echo "<br>";
  echo "<img src=".$img." alt=".$title."> ";

  echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$id.">";

  echo "<br>";


  echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

  echo "<br>";
  echo "</form>";

  echo "</center>";

  echo"<hr>";

}else {

    $query = $db->prepare("INSERT INTO movies (Picture, Title, Description, Date_out, Category, Type, id) VALUES (:Picture, :Title, :Description, :Date_out, :Categorie, :Type, :id )");
    $query->execute([
    "Picture"=>$img,
    "Title"=>$title,
    "Description"=>$summary,
    "Date_out"=>$year."-".$month."-".$day,
    "Categorie"=>$category,
    "Type"=>"film",
    "id"=>$id]);


    echo "<div class='fra'>";



    echo "<center>";
    echo "<br>";
    echo "<form action='php/film_nrm.php' method=\"POST\" target=\"_new\">";

    echo $title;
    echo "<br>";
    echo "<img src=".$img." alt=".$title."> ";

    echo "<input type=\"checkbox\" name=\"id\" class=\"test\" checked=\"checked\" value=".$id.">";

    echo "<br>";


    echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" >";

    echo "<br>";
    echo "</form>";

    echo "</center>";

    echo"<hr>";




//echo "null";
}





//echo "<br>";

//echo "_________________________________________________";



}
curl_close($curl);

}


 ?>
 <style>


   img{
     weight: 50px!important;
     height: 200px!important;

   }

   .fra{

background-color: rgba(225, 225, 225, .8);

   }

   button{

     margin-left: -20px;
   }


   .test{

display: none;

   }

   input{

     margin-left: auto;
     margin-right: auto;
   }
   #auto{

background-color: rgb(150, 150, 150) !important;

   }



 </style>













            <?php include("part/footer.php"); ?>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
