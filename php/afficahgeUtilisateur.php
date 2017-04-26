<?php
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'lectus_project');
define('AUTH_US',md5(time()) );
try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
}catch(Exception $e){
die("erreur SQL :".$e->getMessage());

}
function getEmail($connection) {
    $sql =  'SELECT Email FROM users';
    foreach  ($conn->query($sql) as $row) {
        print $row['Email'] . "\t";
  }
}
getEmail($db);
 ?>
