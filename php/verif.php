




        <?php
    //  session_start();
  //  require "config.php";


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



    <form class="" action="back.php" method="post">

    <input type="email" name="user_email" value=""><br>
    <input type="submit" value="submit">


    </form>




    <?php

    try{

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

    }catch(Exception $e){
    die("erreur SQL :".$e->getMessage());

    }



    $error = false;
    if (count($_POST) ==1
    && !empty($_POST["user_email"])){

$_SESSION["user_email"] = $_POST["user_email"];
      if(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)){
        $error = true;
        $listOfErrors[] = 6;



      }



    if($error == true){

      $_SESSION["errors_form"] = $listOfErrors;
      $_SESSION["data_form"] = $_POST;
      header('Location: adminutilisateur.php');
    }else {



    $query = $db->prepare("SELECT Name FROM users WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];





    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le nom est : ".$value;
      echo "<br>";
    }

    }else {

      die ("l'utilisateur n'existe pas");
    }


    $query = $db->prepare("SELECT Surname FROM users WHERE Email=?");


    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le surname est : ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT Nickname FROM users WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le nickname est : ".$value;
      echo "<br>";
    }

    }
    $query = $db->prepare("SELECT Pwd FROM users WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];




    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {

    }


    ?>

    <form class="" action="changemdp.php" method="post">
      <input type="text" name="mdp" value="" placeholder="mot de passe" >
      <input type="text" name="mdp2" value="" placeholder="confirmez le mot de passe" >
      <input type="submit" name="" value="Changer le mot de passe">
    </form>



    <form method="get" action="ban.php">
        <button type="submit">BAN USER</button>
    </form>


<style>
  #tt{

display:none;

  }
</style>







    <?php

    }

    echo "L'email est :".$_POST["user_email"];
    echo "<br>";

    $query = $db->prepare("SELECT Birthday FROM users WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "la date d'anniversaire est le ( yyyy/mm/dd): ".$value;
      echo "<br>";
    }

    }

    $query = $db->prepare("SELECT Country FROM users WHERE Email=?");



    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "l'indicatif pays est: ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT Date_inserted FROM users WHERE Email=?");
    $query->execute([$_POST["user_email"]]);



    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "l'utilisateur s'est inscrit le : ".$value;
      echo "<br>";
    }

    }


  }
echo "<hr>";

    $query = $db->prepare("SELECT Message FROM tchat WHERE Pseudo=? ORDER BY ID");



    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


  $test = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<table width='75%' border='4'>";
echo "<tr>";
echo "<td> Message </td>";
echo "<td> Auteur </td>";
echo "</tr>";
$i = 0;
$l = count($test);
    if(!empty($test)){
      echo "<hr/>";
      for ($k=0; $k <$l ; $k++) {
      foreach($test[$k] as $value) {
        echo "<tr>";
        echo "<td>".$value."</td>";
        echo "<td>".$_POST["user_email"]."</td>";
        echo "</tr>";

      $i++;
    }

    }

echo "</table>";

}
echo "<hr/>";



//echo $test;









    }








      ?>









      </body>
    </html>








  </body>
</html>
