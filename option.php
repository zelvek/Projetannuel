<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LECTUS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/stylehhh.css" rel="stylesheet">


</head>

<body>

  <?php include("part/menu.php"); ?>






    <div class="container">

      <script src="js/namuol-cheet.js/cheet.min.js"
              type="text/javascript"></script>

      <script src="js/namuol-cheet.js/cheet.js" type="text/javascript">*


      </script>


      <script>
      cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
        alert('Vous avez trouvé notre easter Egg bien joué =) ');
        document.location.href="part/gardian.php";
      });
      </script>

  <?php include("part/utilisateur.php") ?>









        <hr class="featurette-divider">








            <?php include("part/footer.php"); ?>


    </div>


    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>
