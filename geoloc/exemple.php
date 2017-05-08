


<?php






require 'geoipcity.inc';
$database = geoip_open('../geolocGeoLiteCity.dat',GEOIP_STANDARD);

$ip = '74.41.65.128';
$record = geoip_record_by_addr($database, $ip);
print_r($record);


foreach ($record as $key => $value) {
echo $key." ====>".$value."<br>";

}
