<?php
include "part/header.php";


 ?>
 <section>
   <h1>Connexion</h1>
   <form method = "post" action = "php/connexionCheck.php">
     <input type = "text" name = "email" placeholder = "Votre email" value = "" required = "required" ><br>
     <input type = "text" name = "pwd" placeholder = "Votre Password" value = "" require = "required" ><br>
     <input type ="submit" value="Connexion">
   </form>
 </section>
 <?php

  ?>

<?php include "part/footer.php";  ?>
