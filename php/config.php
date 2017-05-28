<?php




define('DB_USER', 'machine');
define('DB_PWD', 'machinemotdepasse');
define('DB_HOST', 'localhost');
define('DB_NAME', 'lectus_project');
define('AUTH_US',md5(time()) );





$listOfCountry = [

                    "en" => "English",
                    "us" => "American",
                    "fr" => "France",
                    "gr" => "German",
                    "it" => "Italia"

];

$listOfGender = [

                    "m" => "Mr",
                    "w" => "Mme",
                    "g" => "Mlle",
                    "o" => "Autre"

];
$listOfGenre = [
                  "ac"=>"action",
                  "sf"=> "science-fiction",
                  "ab"=> "Absurbe",
                  "ad"=> "Avanture",
                  "co"=> "Commedie",
                  "cr"=> "Criminel",
                  "dr"=> "Drame",
                  "fn"=> "Fantasy",
                  "hi"=> "Historique",
                  "ah"=> "Histoire-Alternative",
                  "ho"=> "Horreur",
                  "ph"=> "Philosophie",
                  "po"=> "Politique",
                  "ro"=> "Romance",
                  "sg"=> "Saga Des Gemeaux",
                  "sa"=> "Satire",
                  "sl"=> "Tranche De Vie",
                  "th"=> "Thriller",
                  "ur"=> "Urbain",
                  "we"=> "Western",
                  "me"=> "Mecha",
                  "ec"=> "echi",
                  "yu"=> "yuri",
                  "ya"=> "yaoi",
                  "mg"=> "Magical Girl"


                ];
$listOfErrors = [

                    1 =>"le nom doit faire entre 5 et 50 caractères",
                    2 =>"le prenom doit faire entre 5 et 50 caractères",
                    3 =>"le pseudo doit faire entre 2 et 50 caractères",
                    4 =>"le mdp doit faire au minumum 8 caractères",
                    5 =>"les mots de passe ne correspondent pas",
                    6 =>"l'email n'est pas valide",
                    7 =>"le captcha n'est pas valide",
                    8 =>"Probleme avec le gender",
                    9 =>"Probleme avec le pays",
                    10 =>"Le format de date n'est pas valide",
                    11 =>"Le format de date n'est pas valide",
                    12 => "Vous devez avoir entre 10 et 100 ans",
                    13 => "La date n'est pas valide",
                    14 => "L'adresse mail existe déjà",
                    15 => "job doit faire entre 5 et 50 caractères",
                    16 => "biographie doit être inférieur à 1500 caractères"

];

$listOfJob = [
                "Act" =>"Actor",
                "Real" =>"Director",
                "Mus" => "SongCreator"

];
