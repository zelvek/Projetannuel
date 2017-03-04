<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>



<?php
//EXERCICE 7 (5 PTS AU CONTROLE)

      //Afficher les X premiers nombres premiers
      // X étant une variable, exemple :
      // $x = 3; doit afficher 2,3,5
      // $x = 3; doit afficher 2,3,5,7
       $x = 50;
       $isPrime = true;
      echo"les ".$x." premiers nombres Premiers sont : ";
    $nbPrint = 0;
    $i = 2;
     while($nbPrint < $x)
    {
      $isPrime = true;
        for($cpt=2; $cpt <= $i/2; $cpt++)
        {
          if($i % $cpt ==0)
          {
            $isPrime = false;
            break;
          }
        }
      if($isPrime)
      {
        echo $i." ";
        $nbPrint++;
      }

    $i++;
    }

 ?>






  </body>
</html>
