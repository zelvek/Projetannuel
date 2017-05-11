<?php

session_start();

require 'config.php';

try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);

}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}


$query = $db->prepare("SELECT ip FROM users WHERE Email=?");
$query->execute([$_SESSION['locate']]);
$test = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($test);



//echo $test["0"]["ip"];





foreach ($test["0"] as $value) {
//  print_r($value);





require '../geoloc/geoipcity.inc';
$database = geoip_open('../geoloc/GeoLiteCity.dat',GEOIP_STANDARD);
$ip = $value;
$record = geoip_record_by_addr($database, $ip);
//print_r($record);
//echo $record;


if (!preg_match("*^([0-9]{1,3}.){3}.([0-9]{1,3})$*",$ip)) {
  echo "ip non valide";
}else {
foreach ($record as $key => $value) {
echo $key." ====>".$value."<br>";
}

}
# code...
}

 ?>
