

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


      if(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)){
        $error = true;
        $listOfErrors[] = 6;
      }



    if($error == true){

      $_SESSION["errors_form"] = $listOfErrors;
      $_SESSION["data_form"] = $_POST;
      header('Location: adminutilisateur.php');
    }else {



    $query = $db->prepare("SELECT name FROM users WHERE email=?");

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

    $query = $db->prepare("SELECT surname FROM users WHERE email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le surname est : ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT nickname FROM users WHERE email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "le nickname est : ".$value;
      echo "<br>";
    }

    }
    $query = $db->prepare("SELECT pwd FROM users WHERE email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "ATTENTION LE MDP EST CRYPTEE        ";
      echo "le PWD est : ".$value;
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

    echo "L'email est :".$_POST["user_email"];
    echo "<br>";

    $query = $db->prepare("SELECT birthday FROM users WHERE email=?");

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "la date d'anniversaire est le ( yyyy/mm/dd): ".$value;
      echo "<br>";
    }

    }


<<<<<<< HEAD
    $query = $db->prepare("SELECT Country FROM USERS WHERE Email=?");
=======
    $query = $db->prepare("SELECT country FROM users WHERE email=?");
>>>>>>> parent of d9358aa... marche 1.1

    $query->execute([$_POST["user_email"]]);


    echo $query->errorInfo()[2];


    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result[0])){

    foreach ($result[0] as $value) {
      echo "l'indicatif pays est: ".$value;
      echo "<br>";
    }

    }


    $query = $db->prepare("SELECT date_inserted FROM users WHERE email=?");

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
