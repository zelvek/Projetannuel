
<center>
  <?php
  if (!isset($_SESSION['email'])) {
  header('Location: ../index.php');
  }else{

                            try{
                                $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
                            }catch(Exception $e){
                              die("Erreur SQL : ".$e->getMessage() );
                            }

                            $query = $db->prepare('SELECT Is_admin FROM users WHERE email = :email;');
                              $query->execute(["email" =>$_SESSION['email']] );


                              $w = $query->fetch()["Is_admin"];


                              if ($w != 1) {
  header("Location : ../index.php");

                              }

                            }

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
<form method="post" action="php/savefilm.php">
  <label>
    <br>
    <input type="text" name="title"placeholder="Le titre" value=<?php echo (isset($data_form["title"]))?$data_form["title"]:"";?>> <br>
    <input type="text" name="categorie"placeholder="La catégorie" value=<?php echo (isset($data_form["categorie"]))?$data_form["categorie"]:"";?>> <br>
    <select name = "genre">
    <?php
    $GenreDefault = (isset($data_form["genre"]))?$data_form["genre"]:"ac";
    foreach ($listOfGenre as $key => $genre) {
      echo '<option value="'.$key.'"';
      echo ($GenreDefault == $key)?'selected = "selected"':'';
      echo '>'.$genre."</option>";
    }
    ?>
  </select><br>
    <input type="date" name="sortie"value="<?php echo (isset($data_form["sortie"]))?$data_form["sortie"]:"";?>"><br>
    <textarea name="description"  placeholder="Description du film"cols="60" rows="30" value=<?php echo (isset($data_form["description"]))?$data_form["description"]:"";?>> </textarea><br>
    <input type="text" name="picture"placeholder="url de l'image"value="<?php echo (isset($data_form["picture"]))?$data_form["picture"]:"";?>"><br>
  </label>
  <input type="submit" value="ajout du film"><br>
</form>
<?php


 ?>

 </center>
