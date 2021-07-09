<?php

$session = curl_init();

curl_setopt($session, CURLOPT_URL, "https://google.com");
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$page = curl_exec($session);
curl_close($session);
echo $page;
