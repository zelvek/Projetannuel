<?php




define('API_KEY','TmhiLZMKtVSbsgfU');

$url = "https://api.whatismymovie.com/1.0/?api_key=";

$url2 = "https://api.whatismymovie.com/1.0/?api_key=TmhiLZMKtVSbsgfU&refinements=enabled&test=a+men+who+walk";

$curl = curl_init($url2);


if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url2,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        item1 => 'value',
        item2 => 'value2'
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

print_r(curl_getinfo($resp));
print_r($resp);
