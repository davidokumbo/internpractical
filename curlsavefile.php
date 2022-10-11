<?php
$ch = curl_init();
$url= "https://www.datim.org/api/sqlViews/fgUtV6e9YIX/data.json";
$fh = fopen("file.txt","w");
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FILE, $fh);
$resp = curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
}

fclose($fh);
curl_close($ch);

?>