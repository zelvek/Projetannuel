<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backgroundFront.css">
    <link rel="icon" type="image/png" href="icon.png" />
    

  </head>



<?php
session_start();


 ?>



<body>



    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />







    <SCRIPT LANGUAGE="JavaScript">
    <!-- Disable
    function disableselect(e){
    return false
    }

    function reEnable(){
    return true
    }

    //if IE4+
    document.onselectstart=new Function ("return false")
    document.oncontextmenu=new Function ("return false")
    //if NS6
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
    //-->
    </script>


<div class="">


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
           <div class="row test">



<button class="id_div kw-button myButton col-lg-2 col-md-2 col-lg-push-2 left" onclick="myAlert()">Inscription</button>


<button class="myButton col-lg-2 col-md-2 test2" onclick="myAlert2()">connexion</button>


<?php




function isMobile() {

if(isset($_SERVER["HTTP_X_WAP_PROFILE"])) {
    return true;
}

if(preg_match("/wap\.|\.wap/i",$_SERVER["HTTP_ACCEPT"])) {
    return true;
}


if(isset($_SERVER["HTTP_USER_AGENT"])){
    $user_agents = array("midp", "j2me", "avantg", "docomo", "novarra", "palmos", "palmsource", "240x320", "opwv", "chtml", "pda", "windows\ ce", "mmp\/", "blackberry", "mib\/", "symbian", "wireless", "nokia", "hand", "mobi", "phone", "cdm", "up\.b", "audio", "SIE\-", "SEC\-", "samsung", "HTC", "mot\-", "mitsu", "sagem", "sony", "alcatel", "lg", "erics", "vx", "NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch", "rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi", "bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo", "sgh", "gradi", "jb", "\d\d\di", "moto");
    foreach($user_agents as $user_string){
        if(preg_match("/".$user_string."/i",$_SERVER["HTTP_USER_AGENT"])) {
            return true;
        }
    }
}


if(preg_match("/iphone/i",$_SERVER["HTTP_USER_AGENT"])) {
    return false;
}


return false;
}
    if (isMobile()) {
   header("location: mobile.php");


   }

   ismobile();



 ?>



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






<center class="aa">

         <?php require "part/footer.php" ?>
</center>

<style media="screen">
  .aa{

margin-left: -95%;
color: white;
  }
</style>
