<?php 

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//curl_setopt($ch, CURLOPT_PROXY, '66.96.200.39:80');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$result = curl_exec($ch);
curl_close($ch);

?>
