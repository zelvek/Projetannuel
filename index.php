<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backgroundFront.css">
    <link rel="icon" type="image/x-ico" href="image/icon.ico" />
  </head>



<?php
session_start();


 ?>



<body>


  <!-- les cookies -->

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000"
        },
        "button": {
          "background": "#f1d600"
        }
      },
      "theme": "edgeless",
      "content": {
        "message": "En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies.",
        "dismiss": "Pas de Problème",
        "link": "Le Twitter du Dev",
        "href": "https://twitter.com/root_Updated"
      }
    })});








    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3323508660354393",
        enable_page_level_ads: true
      });
    </script>


    <!-- Piwik -->
  <script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//localhost/Projetannuel/admin/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Piwik Code -->





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
           <div class="row test">



<button class="id_div kw-button myButton col-lg-2 col-md-2 col-lg-push-2 left" onclick="myAlert()">Inscription</button>


<button class="myButton col-lg-2 col-md-2 test2" onclick="myAlert2()">connexion</button>


<?php




function isMobile() {

// Check the server headers to see if they're mobile friendly
if(isset($_SERVER["HTTP_X_WAP_PROFILE"])) {
    return true;
}

// If the http_accept header supports wap then it's a mobile too
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








<?php
require "part/footer.php";
?>
