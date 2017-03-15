<?php
include "part/header.php";
require "php/connexionCheck.php";

 ?>
 <section>
   <h1>Vous etes sur la page de connexion</h1>
   <form method = "post" action = "connexionCheck.php">
     <input type = "text" name = "checkPseudo" placeholder = "Votre pseudo" value = "<?php echo (isset($data_form["checkPseudo"]))?$data_form["checkPseudo"]:"";?>" required = "required" >><br>
     <input type = "text" name = "checkPass" placeholder = "Votre Password" value = "<?php echo (isset($data_form["checkPass"]))?$data_form["checkPass"]:"";?>" require = "required" >><br>
   </form>
 </section>
 <?php
 $checkPwd = $db->prepare('SELECT id FROM users WHERE pwd=:pwd');
 boolean password_verify ( $_POST["pwd"], $che )

  ?>

<?php include "footer.php";  ?>
