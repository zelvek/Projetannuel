<?php
session_start();
include "header.php";
require "functions.php";
require "conf.inc.php";

 ?>


 <section>
<?php
 /*helloWorld();

helloYou("Pierre");
$x = 12;
if ( isPrime($x) ) {
  echo $x."est un nombre premier";

}else {
  echo $x."n'est pas un nombre premier";
}

 ?>

*/


// formualaire inscription test de QI

//gender => radio
//name   => text
//surname => text
//birthday => date
//nickname => text
//email => email
//mdp => password
//mdp confimation => password
//country => list => select
//legacy (CGU) => checkbox
//bouton de validation => submit
//
echo "<div>";
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

<form method="post" action="saveUser.php"> <!-- get = dans l'url et port non visible   -->




  <label>

<!-- label sert a cocher avec les lettres  -->
<?php

$genderDefault = (isset($data_form["gender"]))?$data_form["gender"]:"m";




foreach ($listOfGender as $key => $gender) {
echo "<label>".$gender.'  : <input type="radio" '.( ($key == $genderDefault)?'checked = "checked"':'').'name="gender" value="'.$key.'"></label>';

}
?>

<br>
<input type="text" name="name"placeholder="Votre nom" value=<?php echo (isset($data_form["name"]))?$data_form["name"]:"";?>> <br>



<input type="text" name="surname"placeholder="Votre surname"value="<?php echo (isset($data_form["surname"]))?$data_form["surname"]:"";?>"><br>
<input type="text" name="nickname"placeholder="Votre nickname"value="<?php echo (isset($data_form["nickname"]))?$data_form["nickname"]:"";?>" required="required" ><br>
<input type="date" name="birthday" value="<?php echo (isset($data_form["birthday"]))?$data_form["birthday"]:"";?>" required="required"><br>
<input type="email" name="email" value="<?php echo (isset($data_form["email"]))?$data_form["email"]:"";?>" required="required" placeholder="Votre email"><br>
<input type="password" name="pwd" value="" required="required" placeholder="Votre mdp"><br>
<input type="password" name="pwd2" value=""  required="required" placeholder="confirmation"><br>
<select name="country">

<?php
$countryDefault = (isset($data_form["country"]))?$data_form["country"]:"pl";


foreach ($listOfCountry as $key => $country) {
echo '<option value="'.$key.'"';
echo ($countryDefault == $key)?'selected = "selected"':'';
echo '>'.$country."</option>";



}




 ?>

<!-- checked = checked  c'est pour check avant-->



</select> <br>
<label>
j'accepte les CGUs  <input type="checkbox" name="legacy" required="required"><br>
</label>
</select>



<input type="submit" value="S'inscrire"><br>

<img src="captcha.php" alt=""> <br>
<input type="text" name="captcha"placeholder="recopier le captcha"value="" required="required" ><br>

</div>
</form>





 </section>

 <?php

include "footer.php";

  ?>
