<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ajout</title>






  </head>

 <body id="fond">


  

    <?php require "../php/conf.inc.php" ; ?>

<section>


  <?php

  echo "<div>";
  if(!empty($_SESSION["errors_form"])){


  foreach ($_SESSION["errors_form"] as $key => $errors) {
  echo "<li>".$listOfErrors[$errors]."</li>";
;
  }
  echo "<ul>";
  unset($_SESSION["errors_form"]);
  //session_destroy();
  $data_form = $_SESSION["data_form"];

  }

  ?>
</section>





<center>
<h1>AJOUT</h1>
</center>

<center>
<table width="75%" border="4">
<form class="" action="../php/savefilm.php" method="post" ><br>
   <tr>
       <td><input type="text" name="picture" placeholder="lien de la photo" value="" required="required"><br></td>
       <td><input type="text" name="title" value="" placeholder="titre du film" required="required"></td>
       <td><input type="text" name="realisateur" value="" placeholder="nom du réalisateur principal" required="required"></td>
   </tr>
   <tr>
       <td><input type="text" name="acteur" value="" placeholder="nom de l'acteur principal" required="required"></td>
       <td><input type="text" name="description" value="" placeholder="description" required="required"></td>
       <td><input type="date" name="sortie" value="" required="required"></td>
   </tr>

   <tr>

        <td>
              catégorie : <select name="categorie"><br>
              <?php
              $categorydefault = (isset($data_form["categorie"]))?$data_form["categorie"]:"fi";
              foreach ($listOfCategory as $key => $category) {
              echo '<option value="'.$key.'"';
              echo ($categorydefault == $key)?'selected = "selected"':'';
              echo '>'.$category."</option>";
              }?>
              </select>
        </td>

        <td>

              genre : <select name="genre"><br>
              <?php
              $genredefault = (isset($data_form["genre"]))?$data_form["genre"]:"sf";
              foreach ($listOfGenre as $key => $genre) {
              echo '<option value="'.$key.'"';
              echo ($genredefault == $key)?'selected = "selected"':'';
              echo '>'.$genre."</option>";
              }?>
            </select>

        </td>

        <td><input type="submit" value="AJOUTER"></td>
   </tr>
</form>
</center>
</table>

<br>
<br>
<br>
</body>
</html>
