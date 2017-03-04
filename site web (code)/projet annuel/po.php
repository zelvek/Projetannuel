<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Le Test</title>
  </head>
  <body>

<section>
<?php


if (isset($_COOKIE['BsGeoCategoryVideos'])|| isset($_COOKIE['yp-device']) || isset($_COOKIE['bs'])) {
  echo "<h1> tu es allé sur un site pas convenable au moins de 18 ans </h1>";
}else {
  echo "<h1> Vous êtes sain </h1>";
}


 ?>




</section>



  </body>
</html>
