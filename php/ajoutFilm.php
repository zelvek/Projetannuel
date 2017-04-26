<?php
require "config.php";

 ?>
 <section>
<?php

echo "<div>";
if(!empty($_SESSION["errors_form"])){

echo "<ul>";
foreach ($_SESSION["errors_form"] as $key => $errors) {
echo "<li>".$listOfErrors[$errors]."</li>";
}
echo "<ul>";
unset($_SESSION["errors_form"]);
$data_form = $_SESSION["data_form"];

}


?>
<h1>Ajout Film</h1>
<form method="post" action="saveFilm.php">
  <label>
    <br>
    <input type="text" name="title"placeholder="Le titre" value=<?php echo (isset($data_form["title"]))?$data_form["title"]:"";?>> <br>
    <input type="text" name="categorie"placeholder="La catégorie" value=<?php echo (isset($data_form["categorie"]))?$data_form["categorie"]:"";?>> <br>
    <input type="text" name="genre"placeholder="Le genre"value="<?php echo (isset($data_form["genre"]))?$data_form["genre"]:"";?>"><br>
    <input type="date" name="sortie"value="<?php echo (isset($data_form["sortie"]))?$data_form["sortie"]:"";?>"><br>
    <input type="text" name="description"placeholder="Description du film" value=<?php echo (isset($data_form["description"]))?$data_form["description"]:"";?>> <br>
    <input type="text" name="picture"placeholder="url de l'image"value="<?php echo (isset($data_form["picture"]))?$data_form["picture"]:"";?>"><br>
  </label>
  <input type="submit" value="ajout du film"><br>
</form>
