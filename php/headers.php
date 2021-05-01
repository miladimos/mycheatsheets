<?php

// header($string, $replace, $http_response_code);

header('X-My-Header: Value');
header('X-My-Header: Value 2', false);

header("Location: test.php");

var_dump(headers_list());

http_response_code();
http_response_code(404);

header('HTTP/1.0 404 Not Found');
http_response_code(); // 404

echo headers_sent();
echo headers_sent($file, $line);

header('Refresh: 5; url=google.com');

$url = $_SERVER['PHP_SELF'];
header('Refresh: 3; url='.$url);
header('Refresh: 3');


header("Content-Type: application/octed-stream");

// header("Content-Type: image/png");
header("Content-Disposition: attachment; filename=image.png");
// readfile("files/image.png");


