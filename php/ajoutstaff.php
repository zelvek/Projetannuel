<?php
//session_start();



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
   <h1>Ajout de Staff</h1>
<form method="post" action="saveStaff.php">




  <label>

<br>
<input type = "text" name="name"placeholder="Votre nom" value=<?php echo (isset($data_form["name"]))?$data_form["name"]:"";?>> <br>
<input type = "text" name="surname"placeholder="Votre surname"value="<?php echo (isset($data_form["surname"]))?$data_form["surname"]:"";?>"><br>
<input type = "date" name="birthday" value="<?php echo (isset($data_form["birthday"]))?$data_form["birthday"]:"";?>" required="required"><br>
<input type = "text" name="biographie" value="<?php echo (isset($data_form["biographie"]))?$data_form["biographie"]:"";?>" required="required" placeholder="biographie"><br>
<select name = "Job">
<?php
$jobDefault = (isset($data_form["Job"]))?$data_form["Job"]:"Act";
foreach ($listOfJob as $key => $job) {
  echo '<option value="'.$key.'"';
  echo ($jobDefault == $key)?'selected = "selected"':'';
  echo '>'.$job."</option>";
}
?>
</select>
</div>
<input type="submit" value="Ajout"><br>
</form>
 </section>

 <?php



  ?>
