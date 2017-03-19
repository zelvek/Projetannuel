

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Utilisateur Admin</title>


        <link href="css/style.css" rel="stylesheet">
        <link href="css/one-page-wonder.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
          <link href="css/bootstrap.css" rel="stylesheet">
      </head>


      <body>



        <?php

        require "../php/config.php";

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



    <form class="" action="adminutilisateur.php" method="post">

    <input type="Email" name="user_email" value=""><br>
    <input type="submit" value="submit">


    </form>




    <?php

    try{

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_Pwd);

    }catch(Exception $e){
    die("erreur SQL :".$e->getMessage());

    }



    $error = false;
    if (count($_POST) ==1
    && !empty($_POST["user_email"])){


      if(!filter_var($_POST["user_email"], FILTER_VALIDATE_Email)){
        $error = true;
        $listOfErrors[] = 6;
      }



    if($error == true){

      $_SESSION["errors_form"] = $listOfErrors;
      $_SESSION["data_form"] = $_POST;
      header('Location: adminutilisateur.php');
    }else {



    $query = $db->prepare("SELECT Name FROM USERS WHERE Email=?");

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

    $query = $db->prepare("SELECT surname FROM USERS WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le surname est : ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT Nickname FROM USERS WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le Nickname est : ".$value;
      echo "<br>";
    }

    }
    $query = $db->prepare("SELECT Pwd FROM USERS WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "ATTENTION LE MDP EST CRYPTEE        ";
      echo "le Pwd est : ".$value;
      echo "<br>";
    }


    ?>

    <form class="" action="adminutilisateur.php" method="post">
      <input type="text" name="" value="" placeholder="mot de passe" >
      <input type="text" name="" value="" placeholder="confirmez le mot de passe" >
    <input type="submit" name="" value="Changer le mot de passe">
    </form>









    <?php

    }

    echo "L'Email est :".$_POST["user_email"];
    echo "<br>";

    $query = $db->prepare("SELECT Birthday FROM USERS WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "la date d'anniversaire est le ( yyyy/mm/dd): ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT Country FROM USERS WHERE Email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "l'indicatif pays est: ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT Date_inserted FROM USERS WHERE Email=?");

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




    }



      ?>









      </body>
    </html>








  </body>
</html>
