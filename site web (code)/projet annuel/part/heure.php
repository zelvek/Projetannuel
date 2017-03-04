<?php
// Enregistrons les informations de date dans des variables
setlocale(LC_TIME, 'fra_fra');
$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');
$second = date('s');
$a = 0;
// Maintenant on peut afficher ce qu'on a recueilli






echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute. ' m'.$second. ' s' ;

?>
