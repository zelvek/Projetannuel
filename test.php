<?php




define('API_KEY','TmhiLZMKtVSbsgfU');

$url = "https://api.whatismymovie.com/1.0/?api_key=";

$url2 = "http://netflixroulette.net/api/api.php?actor=Nicolas%20Cage";

$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://netflixroulette.net/api/api.php?actor=Nicolas%20Cage',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
     CURLOPT_HTTPGET => true
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
//https://api.whatismymovie.com/1.0/?api_key=TmhiLZMKtVSbsgfU&text=drummer+of+the+band+explodes,+there+is+stonehenge+and+amplifier+going+to+eleven


if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}else {
  echo "qzdqzd";
}



//print_r($resp);
//

//var_dump( $resp );

echo "<br>";
$resp =json_decode($resp, true);
//print_r($resp);

for ($i=0; $i < count($resp) ; $i++) {

      foreach($resp["0"] as $key => $value) {
if ($key == "category") {
  echo "".$value."";
  echo "<br>";}
        


    }
}

//var_dump( $resp );
echo "<br>";

//print_r($resp);
// Close request to clear up some resources
curl_close($curl);
