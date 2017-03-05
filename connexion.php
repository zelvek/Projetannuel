<?php
include "part/header.php";

 ?>
<section>
  <h1>Vous êtes connecté</h1>
</section>
<?php
$checkPwd = $db->prepare('SELECT id FROM users WHERE pwd=:pwd');

 ?>

<?php include "footer.php";  ?>
