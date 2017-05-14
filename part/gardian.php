<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>easter EGG</title>
  </head>
  <body>


<embed src="../easteregg.mp3" autostart="true" loop="false" hidden="true"></embed>

    <div id="wrapper">
      <div id="stars"></div>
      <div id="rotate">
        <div class="rlayer1 rotator"></div>
        <div class="rLayer2 rotator"></div>
      </div>
      <div class="common" id="ships"></div>
      <div class="common" id="starLord"></div>
      <div class="common" id="rocket"></div>
      <div class="common" id="gamora"></div>
      <div class="common" id="drax"></div>
      <div class="common" id="yondu"></div>
      <div class="common" id="nebula"></div>
      <div class="common" id="mantis"></div>

    </div>



<style>



@font-face {
font-family: 'guardians';
src: url("https://christopher-simmons.github.io/fonts/Guardians.ttf") format("truetype");
}
body {
width: 100vw;
height: 100vh;
position: relative;
background: -webkit-radial-gradient(#011547 -20%, #000000);
background: radial-gradient(#011547 -20%, #000000);
overflow: hidden;
}
body iframe {
opacity: 0;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
pointer-events: none;
position: absolute;
top: 0;
left: 0;
}
body .volume {
position: Absolute;
bottom: 2%;
left: 2%;
color: whitesmoke;
cursor: pointer;
font-family: 'guardians';
display: block;
font-size: 1.25vw;
}
body #wrapper {
width: 70vw;
max-width: 780px;
height: 60vw;
max-height: 670px;
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -55%);
        transform: translate(-50%, -55%);
background: url(https://i.imgsafe.org/0c4ac183ce.jpg);
background-size: 100% 100%;
z-index: 1030;
border-radius: 1%;
}
body #wrapper .common {
position: absolute;
pointer-events: none;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
}
body #wrapper:before {
content: '';
width: 110%;
height: 120%;
background: url(http://i.imgsafe.org/21a9262cc7.png);
background-size: 100% 100%;
position: absolute;
top: -10%;
left: -4%;
}
body #wrapper:after {
content: '';
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: -webkit-linear-gradient(top, transparent 85%, black);
background: linear-gradient(to bottom, transparent 85%, black);
}
body #wrapper #stars {
width: 100%;
height: 100%;
position: Absolute;
top: 0;
left: 0;
background: url(https://i.imgsafe.org/0c48b14439.png);
background-size: 100% 100%;
background-repeat: no-repeat;
}
body #wrapper #rotate {
width: 100%;
height: 100%;
position: relative;
}
body #wrapper #rotate .rotator {
width: 100%;
height: 100%;
position: Absolute;
top: 0;
left: 0;
}
body #wrapper #rotate .rotator:nth-child(1) {
background: url(https://i.imgsafe.org/0c48c11d5d.png);
background-size: 85% 95%;
background-position: center center;
background-repeat: no-repeat;
-webkit-animation: rotateSnova 50s linear infinite;
        animation: rotateSnova 50s linear infinite;
}
body #wrapper #rotate .rotator:nth-child(1):after {
content: '';
width: 100%;
height: 100%;
display: block;
background: url(https://i.imgsafe.org/0c48b90b7c.png);
background-size: 85% 95%;
background-position: center center;
background-repeat: no-repeat;
}
body #wrapper #rotate .rotator:nth-child(2) {
background: url(https://i.imgsafe.org/0c48d75f52.png);
background-size: 85% 95%;
background-position: center center;
background-repeat: no-repeat;
-webkit-animation: rotateSnova 25s linear infinite;
        animation: rotateSnova 25s linear infinite;
}
body #wrapper #ships {
width: 100%;
height: 100%;
top: 0;
left: 0;
background: url(https://i.imgsafe.org/0c48a3d2d0.png);
background-repeat: no-repeat;
background-size: 85% 90%;
background-position: 35% -50%;
-webkit-transform: translate(50%, 50%) translate3d(-49%, -50%, 0vw);
        transform: translate(50%, 50%) translate3d(-49%, -50%, 0vw);
}
body #wrapper #starLord {
top: 5%;
left: 7%;
width: 90%;
height: 95%;
background: url(https://i.imgsafe.org/0c488e497e.png);
background-size: 75% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-48%, -49%, 0vw);
        transform: translate(50%, 50%) translate3d(-48%, -49%, 0vw);
z-index: 10;
}
body #wrapper #starLord:after {
content: '';
width: 100%;
height: 100%;
background: url(https://i.imgsafe.org/0c486dbf5e.png);
position: absolute;
background-size: 75% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
}
body #wrapper #rocket {
top: 60%;
left: 55%;
width: 90%;
height: 90%;
background: url(https://i.imgsafe.org/0c488955ac.png);
background-size: 75% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-47%, -48%, 0vw);
        transform: translate(50%, 50%) translate3d(-47%, -48%, 0vw);
z-index: 9;
}
body #wrapper #gamora {
top: 50%;
left: -35%;
width: 70%;
height: 70%;
background: url(https://i.imgsafe.org/0c48625a53.png);
background-size: 60% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-46%, -47%, 0vw);
        transform: translate(50%, 50%) translate3d(-46%, -47%, 0vw);
z-index: 8;
}
body #wrapper #drax {
top: 15%;
left: -17%;
width: 60%;
height: 70%;
background: url(https://i.imgsafe.org/0c485eb8dd.png);
background-size: 60% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-45%, -46%, 0vw);
        transform: translate(50%, 50%) translate3d(-45%, -46%, 0vw);
z-index: 7;
}
body #wrapper #yondu {
top: 2%;
left: -8%;
width: 110%;
height: 100%;
background: url(https://i.imgsafe.org/0c489a9534.png);
background-size: 90% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-44%, -45%, 0vw);
        transform: translate(50%, 50%) translate3d(-44%, -45%, 0vw);
z-index: 6;
}
body #wrapper #nebula {
top: 50%;
left: 65%;
width: 9.5%;
height: 40%;
background: url(https://i.imgsafe.org/0c487efc5a.png);
background-size: 100% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-43%, -44%, 0vw);
        transform: translate(50%, 50%) translate3d(-43%, -44%, 0vw);
z-index: 5;
}
body #wrapper #mantis {
top: 55%;
left: 60%;
width: 4.5%;
height: 25%;
background: url(https://i.imgsafe.org/0c486a850b.png);
background-size: 100% 100%;
background-position: 100% 100%;
background-repeat: no-repeat;
-webkit-transform: translate(50%, 50%) translate3d(-42%, -43%, 0vw);
        transform: translate(50%, 50%) translate3d(-42%, -43%, 0vw);
z-index: 4;
}



@-webkit-keyframes rotateSnova {
0% {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
}

@keyframes rotateSnova {
0% {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
}

</style>



<script>

</script>




  </body>
</html>
