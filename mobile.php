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




  <div class="container popup id_div" id="id_div">
       <div class="row">
         <div class="col-lg-12">
           <div class="row test">


<center><h1 class="mobile">LES mobiles ne sont pas encore implémenté</h1></center>



<?php





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



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97335556-1', 'auto');
  ga('send', 'pageview');

</script>




<?php
require "part/footer.php";
?>
