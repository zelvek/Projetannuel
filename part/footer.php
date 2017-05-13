<footer>
<center><div class="row">
    <div class="col-lg-12 copyright">
      <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

        <p>Copyright &copy; Aloïs Marcellin </p>


<br>
<br><br><br>
        <div class="loading-wrap">
  <div class="triangle1"></div>
  <div class="triangle2"></div>
  <div class="triangle3"></div>
</div>



<style media="screen">
  a{
    color: black;
  }
  a:hover{
    color: grey;
  }

  .loading-wrap {
  width: 60px; height: 60px;
  position: absolute;
  top: 50%; left: 50%;
  margin: -30px 0 0 -30px;
  background: #777;
  animation: rotation ease-in-out 2s infinite;
  border-radius: 30px;
}

.triangle1, .triangle2, .triangle3 {
  border-width: 0 20px 30px 20px;
  border-style: solid;
  border-color: transparent;
  border-bottom-color: #67cbf0;
  height: 0; width: 0;
  position: absolute;
  left: 10px; top: -10px;
  animation: fadecolor 2s 1s infinite;
  animation: rotation ease-in-out 2s infinite;

}

.triangle2, .triangle3 {
  content: '';
  top: 20px; left: 30px;
  animation-delay: 1.1s;
}

.triangle3 {
  left: -10px;
  animation-delay: 1.1s;
}

@keyframes rotation {
    0% {transform: rotate(0deg);}
    20% {transform: rotate(360deg);}
    100% {transform: rotate(360deg);}
}

@keyframes fadecolor {
    0% {border-bottom-color: #eee;}
    100%{border-bottom-color: #67cbf0;}
}
</style>
<a href="http://www.esgi.fr" target="_blank">
<i class="fa fa-graduation-cap" aria-hidden="true"></i>
</a>

    </div>
</div>






</center>
</footer>
