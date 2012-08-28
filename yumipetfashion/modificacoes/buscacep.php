<?php
$url = 'http://republicavirtual.com.br/web_cep.php';
$formato = 'javascript';
$query_string = $_SERVER["QUERY_STRING"];

// substituição do file_get_contents por curl, pois provavelmente este servidor não está autorizando file_get_contents para url.
$ch = curl_init("$url?formato=$formato&$query_string");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);

//echo file_get_contents ("$url?formato=$formato&$query_string");
?>
