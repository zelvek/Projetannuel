<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <meta http-equiv="refresh" content="30;url=chat.php" />
    </head>
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

  }
</style>
<div id="chat">
<?php
try{

$bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}

$reponse = $bdd->query('SELECT pseudo, message FROM tchat ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
</div>



<style media="screen">
  #chat{
background-color: beige;



  }
</style>

<script>
var nb = 1 ;

timer = window.setTimeout(" window.refresh();", 1000*nb, "JavaScript");
</script>


<form action="part/minichat_post.php" method="post">
    <p>
    <label class="pseudo"  for="pseudo">Pseudo</label> <input type="text" name="pseudo" class="pseudo" ?>  <br />
    <label for="message">Message</label>:<input type="text" name="message" id="message"/> <input type="submit" value="Envoyer" />
</p>
</form>
    </body>
</html>
