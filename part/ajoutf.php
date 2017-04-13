<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ajout</title>



    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/one-page-wonder.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../image/icon.png" />


  </head>
 <body id="fond">


    <?php include("menu.php"); ?>

    <?php
    require "../php/conf.inc.php" ;



    ?>








<section>


  <?php

  if(!empty($_SESSION["errors_form"])){

  echo "<ul>";
  foreach ($_SESSION["errors_form"] as $key => $errors) {
  echo "<li>".$listOfErrors[$errors]."</li>";
  }
  echo "<ul>";
  unset($_SESSION["errors_form"]);
  //session_destroy();
  $data_form = $_SESSION["data_form"];

  }

  ?>
</section>


<h1>AJOUT</h1>



<form class="" action="../php/savefilm.php" method="post"/><br>
<table border="1px" id="tableinscrit" width="95%" border="0"><br>

<input type="text" name="picture" placeholder="lien de la photo" value="" required="required"><br>
<input type="text" name="title" value="" placeholder="titre du film" required="required"><br>


<tr>
<td>

<input type="text" name="realisateur" value="" placeholder="nom du réalisateur principal" required="required"><br>
</td>

<td>
<input type="text" name="acteur" value="" placeholder="nom de l'acteur principal" required="required"><br>

</td>
</tr>


<tr>
<td>

<input type="text" name="description" value="" placeholder="description" required="required"><br>
</td>

<td>
<input type="date" name="sortie" value="" required="required"><br>
</td>
</tr>





catégorie : <select name="categorie"><br>


  <?php
  $categorydefault = (isset($data_form["categorie"]))?$data_form["categorie"]:"fi";


  foreach ($listOfCategory as $key => $category) {
  echo '<option value="'.$key.'"';
  echo ($categorydefault == $key)?'selected = "selected"':'';
  echo '>'.$category."</option>";



  }
?>
</select><br>




genre : <select name="genre"><br>
  <?php
  $genredefault = (isset($data_form["genre"]))?$data_form["genre"]:"sf";


  foreach ($listOfGenre as $key => $genre) {
  echo '<option value="'.$key.'"';
  echo ($genredefault == $key)?'selected = "selected"':'';
  echo '>'.$genre."</option>";



  }

?>
</select><br>
<tr>
<input type="submit" value="AJOUTER"><br>
</tr>

</table>
</form>

.         <table border="1px">
23.             <tr>
24.                 <th colspan="2"> Année - Entreprise</th>
25.                 <th>Missions</th>
26.             </tr>
27.             <tr>
28.                 <td>2015</td>
29.                 <td>Sixt</td>
30.                 <td>SMM</td>
31.             </tr>
32.             <tr>
33.                 <td>2015</td>
34.                 <td>Sixt</td>
35.                 <td>SMM</td>
36.             </tr>
37.         </table>

</body>
</html>
