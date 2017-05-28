<form class="" action="test.php" method="post">
<input type="text" name="nom" value="" placeholder="entrez le nom de votre film / acteur / réalisateur" size="45">
<select name="type">
<option value="acteur">Acteur</option>
<option value="titre">Titre de Film</option>
<option value="realisateur">Realisateur</option>

</select>
<input type="submit" name="" value="Ok">
</form>




<?php




require "php/config.php";
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

echo "AAAA".count($chaine);

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
echo $url2;



$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://netflixroulette.net/api/api.php?actor=Nicolas%20Cage',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
     CURLOPT_HTTPGET => true
));
$resp = curl_exec($curl);





if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}else {
  echo "<br>";
  echo "ça marche";
}




echo "<br>";
$id = 0;
$title =0;
$year =0;
$summary = 0;
$img = 0;


$resp =json_decode($resp, true);

for ($i=0; $i < count($resp) ; $i++) {

      foreach($resp[$i] as $key => $value) {
//echo $key.'========>'.$value."<br>";
//_____________________________________________________________________
if ($key == 'id') {
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
echo "<br>";
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




echo "null";
}





echo "<br>";

echo "_________________________________________________";



}
curl_close($curl);

}
