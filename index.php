<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backgroundFront.css">
    <link rel="icon" type="image/x-ico" href="image/icon.ico" />
  </head>
<body>
<div class="">




  <div class="container">
        <div class="row">
          <div class="col-lg-24">
            <div class="row">
            <div class="col-lg-offset-4 col-lg-4 col-md-5 image"></div>
            <img src="http://fr.web.img6.acsta.net/newsv7/16/01/19/16/59/382184.jpg" alt="" class="image2">
            </div>
          </div>
        </div>
  </div>

</div>
<center class="lectus">
  <svg viewBox="0 0 600 300">

    <!-- Symbol -->
    <symbol id="s-text">
      <text text-anchor="middle"
              x="50%" y="50%" dy=".35em">
         LECTUS
       </text>
    </symbol>

    <!-- Duplicate symbols -->
    <use xlink:href="#s-text" class="text"
              ></use>
    <use xlink:href="#s-text" class="text"
              ></use>
    <use xlink:href="#s-text" class="text"
              ></use>
    <use xlink:href="#s-text" class="text"
              ></use>
    <use xlink:href="#s-text" class="text"
              ></use>

  </svg>


</center>

</div>

<script src='js/script.js'>

</script>


<div class="container">
      <div class="row">
        <div class="col-lg-24">
          <div class="row">
          <div class="col-lg-offset-4 col-lg-4 col-md-4 image"></div>
          <img src="http://myscreens.fr/wp-content/uploads/2010/03/IM2_REG_120x160_BD.jpg" alt="" class="image">
          </div>
        </div>
      </div>
</div>



<div class="container">
      <div class="row">
        <div class="col-lg-24">
          <div class="row">
          <div class="col-lg-offset-4 col-lg-4 col-md-5 image"></div>
          <img src="http://fr.web.img6.acsta.net/newsv7/16/01/19/16/59/382184.jpg" alt="" class="image2">
          </div>
        </div>
      </div>


  <div class="container popup id_div" id="id_div">
       <div class="row">
         <div class="col-lg-12">
           <div class="row">



<button class="id_div kw-button myButton col-lg-2 col-md-2 col-lg-push-2 left" onclick="myAlert()">Inscription</button>


<button class="myButton col-lg-2 col-md-2 col-lg-pull-2 test2" onclick="myAlert2()">connexion</button>






           </div>
          </div>
        </div>
     </div>

     <div id="modal1" class="my-box ">
         <div class="box-content">
           <p>
     <?php
     require 'inscription.php';


      ?>    </p>
           <div class="close-box" onclick="myClose()">Close</div>
         </div>
     </div>

     <div id="modal2" class="my-box ">
         <div class="box-content">
           <p>
     <?php
     require 'connexion.php';


      ?>    </p>
           <div class="close-box" onclick="myClose2()">Close</div>
         </div>
     </div>


  </boby>
</html>








<?php
//$checkPwd = $db->prepare('SELECT id FROM users WHERE pwd=:pwd');

?>
