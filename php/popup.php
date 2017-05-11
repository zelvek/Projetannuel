<div class="row">
          <div class="col-lg-12">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Vérification utilisateur
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">


                    <?php require 'verif.php';

                    if (!isset($_SESSION['email'])) {
                    header('Location: ../index.php');
                    }else{

                                              try{
                                                  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME , DB_USER, DB_PWD); // /!\ connection à la base de données /!\
                                              }catch(Exception $e){
                                                die("Erreur SQL : ".$e->getMessage() );
                                              }

                                              $query = $db->prepare('SELECT Is_admin FROM users WHERE email = :email;');
                                                $query->execute(["email" =>$_SESSION['email']] );


                                                $w = $query->fetch()["Is_admin"];


                                                if ($w != 1) {
                    header("Location : ../index.php");

                                                }

                                              }


                    ?>

                    <br>
                    <br>
                    <br>
                    <br>

                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Ajout d'utilisateur</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body crom">

                <?php require 'ajoutFilm.php'; ?>
                <br>
                <br>
                <br>


                  </div>
                </div>
              </div>


              <!-- /.panel -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Ajout Staff</a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse">
    <div class="panel-body">
      <?php require 'ajoutstaff.php'; ?>
      <br>
      <br>
      <br>


    </div>
  </div>
</div>
<!-- /.panel -->

<!-- /.panel -->
</div>
<!-- /.panel-group -->
</div>
<!-- /.col-lg-12 -->
</div>
