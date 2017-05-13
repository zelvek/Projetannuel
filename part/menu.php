<link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
    <nav>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index2.php">Lectus</a>


<?php session_start();


unset($_SESSION["film"]);

require "php/functions.php";
require "php/coo.php";




?>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">

                      <li>
                        <a href="chat.php"> Chat</a>
                      </li>
                      <li>
                        <a href="recherche.php"> recherche</a>
                      </li>
                      <li>
                        <a href="option.php"> <?php   echo $_SESSION['email'];  ?> </a>
                        <li>



                          <?php







                          try{
                              $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
                          }catch(Exception $e){
                            die("Erreur SQL : ".$e->getMessage() );
                          }

                          $query = $db->prepare('SELECT Is_admin FROM users WHERE email = :email;');
                            $query->execute(["email" =>$_SESSION['email']] );


                            $w = $query->fetch()["Is_admin"];


                            if ($w == 1) {
                              echo "<li>";
                              echo "<a href='back.php'> Pannel Admin </a>";
                              echo "</li>";
                            }

                           ?>


                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>
    </nav>



    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1><a href="index2.php" id="lectus">LECTUS</a></h1>
                <!--<h1><a href="../index2.php" id="lectus">LECTUS</a></h1>-->
                <style>
                .tep{

                height: 15px !important;
                width: 15px !important;

                }
                </style>
<center>
                <li> <a href="php/disco.php">
                <img class="tep" src="image/offline.png" alt="">
                </a>
</center>


              </li>
            </div>
        </div>


        <script type="text/javascript">
	(function() {
		var adlS = document.createElement('script'); adlS.type = 'text/javascript'; adlS.async = true;
		adlS.src = '//www.adwidecenter.com/adlscript/showads.php?idpub=209450&tmp='+Math.floor(Math.random()*99999999999);
		var sadlS = document.getElementsByTagName('script')[0]; sadlS.parentNode.insertBefore(adlS, sadlS);
	})();
</script>
    </header>
