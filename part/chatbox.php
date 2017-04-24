
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>




<style media="screen">
  .pseudo{

display: none;

  }  #chat{
  background-color: beige;



    }

</style>
<div id="chat">

</div>


<script>

refresh();

function refresh() {
$.ajax({
    url: "part/chatboxrefresh.php", // Ton fichier ou se trouve ton chat
    success:
        function(retour){
          console.log(retour);
        $('#chat').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
    }
});

}

setInterval(refresh, 1000)
</script>


<form action="part/minichat_post.php" method="post">
    <p>
    <label class="pseudo"  for="pseudo">Pseudo</label> <input type="text" name="pseudo" class="pseudo" ?>  <br />
    <label for="message">Message</label>:<input type="text" name="message" id="message"/> <input type="submit" value="Envoyer" />
</p>
</form>
    </body>
</html>
