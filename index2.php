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
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/one-page-wonder.css" rel="stylesheet">

    <link href="css/stylehhh.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="icon.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="fond">
<center>

  <?php

include("part/menu.php");



?>

<?php include ("part/recherche.php");









?>






    <!-- Page Content -->
    <div class="container">

        <?php include ("part/film.php"); ?>

        <?php include ("part/serie.php"); ?>

          <?php include ("part/jeux.php"); ?>



        <!-- Footer -->

            <?php include("part/footer.php"); ?>


    </div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</center>
</body>

</html>
