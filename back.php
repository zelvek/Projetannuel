<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LECTUS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/stylehhh.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




  <?php include("part/menu.php");


echo $_SESSION['email'];
echo $_SESSION['token'];
//all work

   ?>











    <div class="row">
    <div class="col-xs-12 col-lg-12 ">
    <div class="col-lg-3"></div>
    <a href="php/verif.php" class="myButton btn btn-send col-lg-6"  target=_blank>Utilisateurs</a>
    <div class="col-lg-3"></div>
    </div>
    </div>



    <div class="row">
    <div class="col-xs-12 col-lg-12 ">
    <div class="col-lg-3"></div>
    <a href="part/ajoutf.php" class="myButton btn btn-send col-lg-6"target="_blank">Ajout Film</a> <br>
    <div class="col-lg-3"></div>
    </div>
    </div>


    <div class="row">
    <div class="col-xs-12 col-lg-12 ">
    <div class="col-lg-3"></div>
    <a href="php/ajoutstaff.php" class="myButton btn btn-send col-lg-6">Ajout Staff to Add Before film</a> <br>
    <div class="col-lg-3"></div>
    </div>
    </div>

        </div>
        </div>

    <?php

    try{

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

    }catch(Exception $e){
    die("erreur SQL :".$e->getMessage());

    }


    $p = NULL;
          $query = $db->prepare("SELECT Is_connected FROM users WHERE Is_connected IS NOT NULL");
          $query->execute();



    $test = $query->fetchAll(PDO::FETCH_ASSOC);
    echo ($query->errorInfo()[2]);


    $a = count($test);





    echo"<center>";

    echo "le nombre d'utilisateur connectés est de :".$a."  c'est super";

    echo"</center>";



    ?>

















            <?php include("part/footer.php"); ?>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
