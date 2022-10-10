<?php

$handler = curl_init();
curl_setopt($handler, CURLOPT_URL, "url");
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true); // خروجی مستفیم به مرورگر ارسال نمی شود و برگشت داده می شود
$result = curl_exec($handler);
curl_close($handler);



// important options
curl_setopt($handler, CURLOPT_REFERER, "http://referer.com"); // set referer address
curl_setopt($handler, CURLOPT_HEADER, true);
curl_setopt($handler, CURLOPT_NOBODY, true);
curl_setopt($handler, CURLOPT_POST, true);
curl_setopt($handler, CURLOPT_POSTFIELDS, $data);

curl_setopt($handler, CURLOPT_HTTPHEADER, $headers);



 